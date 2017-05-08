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
use Microsoft\BingAds\v11\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v11\CustomerManagement\Paging;
use Microsoft\BingAds\v11\CustomerManagement\Predicate;
use Microsoft\BingAds\v11\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\User;
use Microsoft\BingAds\v11\CustomerManagement\GetCustomerPilotFeaturesRequest;

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

    $user = GetUser(null);
    OutputUser($user);

    // Search for the Bing Ads accounts that the user can access.

    $accounts = SearchAccountsByUserId($user->Id);

    foreach ($accounts->Account as $account)
    {
        OutputAccount($account);

        // Optionally you can find out which pilot features the customer is able to use. 
        // Each account could belong to a different customer, so use the customer ID in each account.
        $featurePilotFlags = GetCustomerPilotFeatures($account->ParentCustomerId);
        if (!empty($featurePilotFlags))
        {
            print "Customer Pilot Flags:\n";
            foreach ($featurePilotFlags->int as $flag)
            {
                printf("%d; ", $flag);
            }
        }
        
        $GLOBALS['AuthorizationData']->AccountId = $account->Id;
        $GLOBALS['AuthorizationData']->CustomerId = $account->ParentCustomerId;
        $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

        print "\n";

        $getCampaignsByAccountIdResponse = GetCampaignsByAccountId($account->Id);
        if(isset($getCampaignsByAccountIdResponse->Campaigns) && isset($getCampaignsByAccountIdResponse->Campaigns->Campaign))
        {
            print "Campaigns in the account:\n\n";
            foreach ($getCampaignsByAccountIdResponse->Campaigns->Campaign as $campaign)
            {
                OutputCampaign($campaign);
            }
        }
        else
        {
            print "The account doesn't have any campaigns:\n\n";
        }
    }
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

    return $GLOBALS['Proxy']->GetService()->GetUser($request)->User;
}

// Searches by UserId for accounts that the user can manage.

function SearchAccountsByUserId($userId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 
  
    // Specify the page index and number of customer results per page.

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 accounts for this page of results    

    $predicate = new Predicate();
    $predicate->Field = "UserId";
    $predicate->Operator = PredicateOperator::Equals;
    $predicate->Value = $userId; 

    $request = new SearchAccountsRequest();
    $request->Ordering = null;
    $request->PageInfo = $pageInfo;
    $request->Predicates = array($predicate);

    return $GLOBALS['Proxy']->GetService()->SearchAccounts($request)->Accounts;
}

// Gets the list of pilot features that the customer is able to use.

function GetCustomerPilotFeatures($customerId)
{   
    $GLOBALS['Proxy'] = $GLOBALS['CustomerProxy']; 

    $request = new GetCustomerPilotFeaturesRequest();
    $request->CustomerId = $customerId;

    return $GLOBALS['Proxy']->GetService()->GetCustomerPilotFeatures($request)->FeaturePilotFlags;
}

// Returns a list of campaigns for the specified account.

function GetCampaignsByAccountId($accountId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetCampaignsByAccountIdRequest();
    $request->AccountId = $accountId;

    return $GLOBALS['Proxy']->GetService()->GetCampaignsByAccountId($request);
}

// Outputs the details of the specified user.

function OutputUser($user)
{
    if(empty($user))
    {
        return;
    }

    if ($user->IsMigratedToMicrosoftAccount)
    {
        print "The user is migrated to a Microsoft account, " .
              "and the UserName field is the corresponding email address.\n\n";
    }
    else
    {
        print "The user is not yet migrated to a Microsoft account, " .
              "and the value of UserName is a legacy Bing Ads managed user.\n\n";
    }

    printf("UserName is %s\n", $user->UserName);
    printf("Bing Ads Email is %s\n", $user->ContactInfo->Email);
    printf("User Id is %d\n", $user->Id);
    printf("FirstName is %s\n", $user->Name->FirstName);
    if (!empty($user->Name->MiddleInitial))
    {
        printf("MiddleInitial is %s\n", $user->Name->MiddleInitial);
    }
    printf("LastName is %s\n\n", $user->Name->LastName);
}


// Outputs an account.

function OutputAccount($account)
{
    if(empty($account))
    {
        return;
    }

    printf("Account Id: %d\n", $account->Id);
    printf("Account Number: %s\n", $account->Number);
    printf("Account Name: %s\n", $account->Name);
    printf("Account Parent Customer Id: %d\n", $account->ParentCustomerId);
}

// Outputs a campaign.

function OutputCampaign($campaign)
{
    if(empty($campaign))
    {
        return;
    }

    printf("Campaign Id: %d\n", $campaign->Id);
    printf("Campaign Name: %s\n", $campaign->Name);
}

?>
