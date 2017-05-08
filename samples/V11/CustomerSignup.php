<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\CampaignManagement classes that will be used.
use Microsoft\BingAds\v11\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\v11\CampaignManagement\Campaign;

// Specify the Microsoft\BingAds\v11\CustomerManagement classes that will be used.
use Microsoft\BingAds\v11\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v11\CustomerManagement\SignupCustomerRequest;
use Microsoft\BingAds\v11\CustomerManagement\Customer;
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\AdvertiserAccount;
use Microsoft\BingAds\v11\CustomerManagement\User;
use Microsoft\BingAds\v11\CustomerManagement\AccountType;
use Microsoft\BingAds\v11\CustomerManagement\CurrencyType;
use Microsoft\BingAds\v11\CustomerManagement\Industry;
use Microsoft\BingAds\v11\CustomerManagement\LanguageType;
use Microsoft\BingAds\v11\CustomerManagement\TimeZoneType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 
$GLOBALS['CampaignProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // You should authenticate for Bing Ads production services with a Microsoft Account, 
    // instead of providing the Bing Ads username and password set. 
    
    //AuthHelper::AuthenticateWithOAuth();

    // However, authentication with a Microsoft Account is currently not supported in Sandbox,
    // so it is recommended that you set the UserName and Password in sandbox for testing.

    AuthHelper::AuthenticateWithUserName();

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $getUserResponse = GetUser(null);
    $user = $getUserResponse->User;
    
    // Only a user with the aggregator role (33) can sign up new customers. 
    // If the user does not have the aggregator role, then do not continue.
    if (!(in_array(33, $getUserResponse->Roles->int))){
        print "Only a user with the aggregator role (33) can sign up new customers.";
        return;
    }
    
    // For Customer.CustomerAddress and Account.BusinessAddress, you can use the same address 
    // as your aggregator user, although you must set Id and TimeStamp to null.
    $userAddress = $user->ContactInfo->Address;
    $userAddress->Id = null;
    $userAddress->TimeStamp = null;
    
    $customer = new Customer();
                
    // The customer's business address.
    $customer->CustomerAddress = $userAddress;

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
                  
    // The type of account. Bing Ads API only supports the Advertiser account.
    $account->AccountType = AccountType::Advertiser;

    // The location where your business is legally registered. 
    // The business address is used to determine your tax requirements.
    // BusinessAddress will be required in a future version of the Bing Ads API.
    // Please start using it.
    $account->BusinessAddress = $userAddress;

    // The type of currency that is used to settle the account. The service uses the currency information for billing purposes.
    $account->CurrencyType = CurrencyType::USDollar;

    // Optionally you can set up each account with auto tagging.
    // The AutoTag key and value pair is an account level setting that determines whether to append or replace 
    // the supported UTM tracking codes within the final URL of ads delivered. The default value is '0', and
    // Bing Ads will not append any UTM tracking codes to your ad or keyword final URL.
    $accountFCM = [
        "AutoTag" => "0",
    ];

    // The list of key and value strings for forward compatibility. This element can be used
    // to avoid otherwise breaking changes when new elements are added in future releases.
    $account->ForwardCompatibilityMap = $accountFCM;

    // The name of the account. The name can contain a maximum of 100 characters and must be unique within the customer.
    $account->Name = "Child Account " . $_SERVER['REQUEST_TIME'];

    // The identifier of the customer that owns the account. In the Bing Ads API operations 
    // that require a customer identifier, this is the identifier that you set the CustomerId SOAP header to.
    $account->ParentCustomerId = $user->CustomerId;

    // The TaxId (VAT identifier) is optional. If specified, The VAT identifier must be valid 
    // in the country that you specified in the BusinessAddress element. Without a VAT registration 
    // number or exemption certificate, taxes might apply based on your business location.
    $account->TaxId = null;

    // The default time-zone value to use for campaigns in this account.
    // If not specified, the time zone will be set to PacificTimeUSCanadaTijuana by default.
    // TimeZone will be required in a future version of the Bing Ads API.
    // Please start using it.
    $account->TimeZone = TimeZoneType::PacificTimeUSCanadaTijuana;
                   
    //$encodedAccount = new SoapVar($account, SOAP_ENC_OBJECT, 'AdvertiserAccount', $GLOBALS['CustomerProxy']->GetNamespace());
    $encodedAccount = new SoapVar(
                    $account, 
                    SOAP_ENC_OBJECT, 
                    'AdvertiserAccount', 
                    "https://bingads.microsoft.com/Customer/v11/Entities"
                );
    
    // Signup a new customer and account for the reseller. 
    $signupCustomerResponse = SignupCustomer(
        $customer,
        $encodedAccount,
        $user->CustomerId);

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
  // Output the last request/response.

  print "\nLast SOAP request/response:\n";
  printf("Fault Code: %s\nFault String: %s\n", $e->faultcode, $e->faultstring);
  print $GLOBALS['Proxy']->GetWsdl() . "\n";
  print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
  print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";

    // Customer Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
      ? $e->detail->AdApiFaultDetail->Errors->AdApiError
      : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

      // If the AdApiError array is not null, the following are examples of error codes that may be found.
      foreach ($errors as $error)
      {
        print "AdApiError\n";
        printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

        switch ($error->Code)
        {
          case 105:  // InvalidCredentials
            break;
          default:
            print "Please see MSDN documentation for more details about the error code output above.\n";
            break;
        }
      }
    }

    // Customer Management service operations can throw ApiFault.
    elseif (isset($e->detail->ApiFault))
    {
      // Log this fault.

      print "The operation failed with the following faults:\n";

      // If the OperationError array is not null, the following are examples of error codes that may be found.
      if (!empty($e->detail->ApiFault->OperationErrors))
      {
        $errors = is_array($e->detail->ApiFault->OperationErrors->OperationError)
        ? $e->detail->ApiFault->OperationErrors->OperationError
        : array('OperationError' => $e->detail->ApiFault->OperationErrors->OperationError);

        foreach ($errors as $error)
        {
          print "OperationError\n";
          printf("Code: %d\nMessage: %s\n", $error->Code, $error->Message);

          switch ($error->Code)
          {
            case 106:   // UserIsNotAuthorized
              break;
            default:
              print "Please see MSDN documentation for more details about the error code output above.\n";
              break;
          }
        }
      }
    }  
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}
    
// Gets a User object by the specified UserId.

function GetUser($userId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetUserRequest();
    $request->UserId = $userId;

    return $GLOBALS['Proxy']->GetService()->GetUser($request);
}

// Creates a new child customer and account that rolls up to the reseller's billing invoice.

function SignupCustomer($customer, $account, $parentCustomerId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    $request = new SignupCustomerRequest();
    $request->Customer = $customer;
    $request->Account = $account;
    $request->ParentCustomerId = $parentCustomerId;

    return $GLOBALS['Proxy']->GetService()->SignupCustomer($request);
}

?>
