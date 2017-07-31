<?php

namespace Microsoft\BingAds\Samples\V11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CampaignManagementHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V11\CampaignManagement\Campaign;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\V11\CampaignManagementHelper;
use Microsoft\BingAds\Samples\V11\CustomerManagementHelper;

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

    $user = CustomerManagementHelper::GetUser(null)->User;

    // Search for the Bing Ads accounts that the user can access.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;

    foreach ($accounts->Account as $account)
    {
        CustomerManagementHelper::OutputAccount($account);

        // Optionally you can find out which pilot features the customer is able to use. 
        // Each account could belong to a different customer, so use the customer ID in each account.
        $featurePilotFlags = CustomerManagementHelper::GetCustomerPilotFeatures($account->ParentCustomerId)->FeaturePilotFlags;
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

        $getCampaignsByAccountIdResponse = CampaignManagementHelper::GetCampaignsByAccountId($account->Id, CampaignManagementHelper::AllCampaignTypes);
        if(isset($getCampaignsByAccountIdResponse->Campaigns) && isset($getCampaignsByAccountIdResponse->Campaigns->Campaign))
        {
            print "Campaigns in the account:\n\n";
            foreach ($getCampaignsByAccountIdResponse->Campaigns->Campaign as $campaign)
            {
                CampaignManagementHelper::OutputCampaign($campaign);
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

?>
