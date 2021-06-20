<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

include __DIR__ . "/AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CustomerManagement classes that will be used.
use Microsoft\BingAds\V13\CustomerManagement\Address;
use Microsoft\BingAds\V13\CustomerManagement\Customer;
use Microsoft\BingAds\V13\CustomerManagement\AdvertiserAccount;
use Microsoft\BingAds\V13\CustomerManagement\User;
use Microsoft\BingAds\V13\CustomerManagement\AutoTagType;
use Microsoft\BingAds\V13\CustomerManagement\CurrencyCode;
use Microsoft\BingAds\V13\CustomerManagement\Industry;
use Microsoft\BingAds\V13\CustomerManagement\LanguageType;
use Microsoft\BingAds\V13\CustomerManagement\TimeZoneType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    print("-----\r\nGetUser:\r\n");
    $getUserResponse = CustomerManagementExampleHelper::GetUser(
        null, 
        true
    );
    $user = $getUserResponse->User;
    print("User:");
    CustomerManagementExampleHelper::OutputUser($user);
    print("CustomerRoles:");
    CustomerManagementExampleHelper::OutputArrayOfCustomerRole($getUserResponse->CustomerRoles);
    
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

    // The primary business segment of the customer, for example, automotive, food, or entertainment.
    $customer->Industry = Industry::Other;

    // The primary country where the customer operates. 
    $customer->MarketCountry = "US";

    // The primary language that the customer uses. 
    $customer->MarketLanguage = LanguageType::English;

    // The name of the customer. 
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

    // The type of currency that is used to settle the account. 
    // The service uses the currency information for billing purposes.
    $account->CurrencyCode = CurrencyCode::USD;

    // The name of the account. 
    $account->Name = "Child Account " . $_SERVER['REQUEST_TIME'];

    // The identifier of the customer that owns the account. 
    $account->ParentCustomerId = $user->CustomerId;

    // The TaxInformation is optional. If specified, The tax information must be valid 
    // in the country that you specified in the BusinessAddress element. Without tax information 
    // or exemption certificate, taxes might apply based on your business location.
    $account->TaxInformation = null;

    // The default time-zone for campaigns in this account.
    $account->TimeZone = TimeZoneType::PacificTimeUSCanadaTijuana;
    
    // Signup a new customer and account for the reseller. 
    print("-----\r\nSignupCustomer:\r\n");
    $signupCustomerResponse = CustomerManagementExampleHelper::SignupCustomer(
        $customer,
        $account,
        $user->CustomerId,
        null,
        null
    );

    print "New Customer and Account:\r\n";

    // This is the identifier that you will use to set the CustomerId 
    // element in most of the Bing Ads API service operations.
    printf("CustomerId: %s\r\n", $signupCustomerResponse->CustomerId);

    // The read-only system-generated customer number that is used in the Bing Ads web application. 
    // The customer number is of the form, Cnnnnnnn, where nnnnnnn is a series of digits.
    printf("CustomerNumber: %s\r\n", $signupCustomerResponse->CustomerNumber);

    // This is the identifier that you will use to set the AccountId and CustomerAccountId 
    // elements in most of the Bing Ads API service operations.
    printf("AccountId: %s\r\n", $signupCustomerResponse->AccountId);

    // The read-only system generated account number that is used to identify the account in the Bing Ads web application. 
    // The account number has the form xxxxxxxx, where xxxxxxxx is a series of any eight alphanumeric characters.
    printf("AccountNumber: %s\n\n", $signupCustomerResponse->AccountNumber);
}
catch (SoapFault $e)
{
    printf("-----\r\nFault Code: %s\r\nFault String: %s\r\nFault Detail: \r\n", $e->faultcode, $e->faultstring);
    var_dump($e->detail);
	print "-----\r\nLast SOAP request/response:\r\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";
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
