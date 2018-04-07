<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

require_once "/CustomerManagementExampleHelper.php";

include "/AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CustomerManagement classes that will be used.
use Microsoft\BingAds\V12\CustomerManagement\Address;
use Microsoft\BingAds\V12\CustomerManagement\Customer;
use Microsoft\BingAds\V12\CustomerManagement\AdvertiserAccount;
use Microsoft\BingAds\V12\CustomerManagement\User;
use Microsoft\BingAds\V12\CustomerManagement\AutoTagType;
use Microsoft\BingAds\V12\CustomerManagement\CurrencyCode;
use Microsoft\BingAds\V12\CustomerManagement\Industry;
use Microsoft\BingAds\V12\CustomerManagement\LanguageType;
use Microsoft\BingAds\V12\CustomerManagement\TimeZoneType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerManagementProxy'] = null; 
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CustomerManagementProxy'] = new ServiceClient(
      ServiceClientType::CustomerManagementVersion12, 
      $GLOBALS['AuthorizationData'], 
      AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $getUserResponse = CustomerManagementExampleHelper::GetUser(null);
    $user = $getUserResponse->User;
    
    // Only a user with the aggregator role (33) can sign up new customers. 
    // If the user does not have the aggregator role, then do not continue.
    $roleIds = array();
    foreach ($getUserResponse->CustomerRoles->CustomerRole as $customerRole)
    {
        $roleIds[] = $customerRole->RoleId;
    }
    if (!(in_array(33, $roleIds))){
        print "Only a user with the aggregator role (33) can sign up new customers.";
        return;
    }
    
    $customer = new Customer();

    // The list of key and value strings for forward compatibility. This element can be used
    // to avoid otherwise breaking changes when new elements are added in future releases.
    // There are currently no forward compatibility changes for the Customer object.
    $customer->ForwardCompatibilityMap = null;

    // The primary business segment of the customer, for example, automotive, food, or entertainment.
    $customer->Industry = Industry::Other;

    // The primary country where the customer operates. This country will be the 
    // default country for ad groups in the customer’s campaigns.
    $customer->MarketCountry = "US";

    // The primary language that the customer uses. This language will be the 
    // default language for ad groups in the customer’s campaigns.
    $customer->MarketLanguage = LanguageType::English;

    // The name of the customer. This element can contain a maximum of 100 characters.
    $customer->Name = "Child Customer " . $_SERVER['REQUEST_TIME'];
    
    $account = new AdvertiserAccount();

    // The location where your business is legally registered. 
    // The business address is used to determine your tax requirements.   
    $businessAddress = new Address();
    $businessAddress->City = "Redmond";
    $businessAddress->Line1 = "One Microsoft Way";
    $businessAddress->CountryCode = "US";
    $businessAddress->PostalCode = "98052";
    $businessAddress->StateOrProvince = "WA"; 
    $account->BusinessAddress = $businessAddress;

    // The type of currency that is used to settle the account. The service uses the currency information for billing purposes.
    $account->CurrencyCode = CurrencyCode::USD;

    // Optionally you can set up each account with auto tagging.
    // The AutoTag key and value pair is an account level setting that determines whether to append or replace 
    // the supported UTM tracking codes within the final URL of ads delivered. The default value is 'Inactive', and
    // Bing Ads will not append any UTM tracking codes to your ad or keyword final URL.
    $account->AutoTagType = AutoTagType::Inactive;

    // The name of the account. The name can contain a maximum of 100 characters and must be unique within the customer.
    $account->Name = "Child Account " . $_SERVER['REQUEST_TIME'];

    // The identifier of the customer that owns the account. In the Bing Ads API operations 
    // that require a customer identifier, this is the identifier that you set the CustomerId SOAP header to.
    $account->ParentCustomerId = $user->CustomerId;

    // The TaxInformation is optional. If specified, The tax information must be valid 
    // in the country that you specified in the BusinessAddress element. Without tax information 
    // or exemption certificate, taxes might apply based on your business location.
    $account->TaxInformation = null;

    // The time-zone value to use for campaigns in this account.
    $account->TimeZone = TimeZoneType::PacificTimeUSCanadaTijuana;
    
    // Signup a new customer and account for the reseller. 
    $signupCustomerResponse = CustomerManagementExampleHelper::SignupCustomer(
        $customer,
        $account,
        $user->CustomerId,
        null);

    print "New Customer and Account:\n";

    // This is the identifier that you will use to set the CustomerId 
    // element in most of the Bing Ads API service operations.
    printf("CustomerId: %s\n", $signupCustomerResponse->CustomerId);

    // The read-only system-generated customer number that is used in the Bing Ads web application. 
    // The customer number is of the form, Cnnnnnnn, where nnnnnnn is a series of digits.
    printf("CustomerNumber: %s\n", $signupCustomerResponse->CustomerNumber);

    // This is the identifier that you will use to set the AccountId and CustomerAccountId 
    // elements in most of the Bing Ads API service operations.
    printf("AccountId: %s\n", $signupCustomerResponse->AccountId);

    // The read-only system generated account number that is used to identify the account in the Bing Ads web application. 
    // The account number has the form xxxxxxxx, where xxxxxxxx is a series of any eight alphanumeric characters.
    printf("AccountNumber: %s\n\n", $signupCustomerResponse->AccountNumber);
    
    print "Program execution completed\n"; 
}
catch (SoapFault $e)
{
    print "\nLast SOAP request/response:\n";
    printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    if (isset($e->detail->AdApiFaultDetail))
    {
        CustomerManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFault))
    {
        CustomerManagementExampleHelper::OutputApiFault($e->detail->ApiFault);
    }
}
catch (Exception $e)
{
    // Ignore fault exceptions that we already caught.
    if ($e->getPrevious())
    { ; }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
