<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";
include "/CustomerManagementHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v11\CustomerManagement classes that will be used.
use Microsoft\BingAds\v11\CustomerManagement\Paging;
use Microsoft\BingAds\v11\CustomerManagement\Predicate;
use Microsoft\BingAds\v11\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v11\CustomerManagement\Account;
use Microsoft\BingAds\v11\CustomerManagement\User;
use Microsoft\BingAds\v11\CustomerManagement\ClientLink;
use Microsoft\BingAds\v11\CustomerManagement\ClientLinkStatus;
use Microsoft\BingAds\v11\CustomerManagement\OrderBy;
use Microsoft\BingAds\v11\CustomerManagement\OrderByField;
use Microsoft\BingAds\v11\CustomerManagement\SortOrder;
use Microsoft\BingAds\v11\CustomerManagement\OperationError;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\AuthHelper;
use Microsoft\BingAds\Samples\v11\CustomerManagementHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerProxy'] = null; 

/** 
 * This example demonstrates how to use agency credentials to invite a client, 
 * and use client credentials to accept the invitation. 
 * Run this sample multiple times alternating between agency and client credentials 
 * to update and observe the status change, for example from LinkPending to LinkAccepted to Active.
 */

print "You must edit this sample to provide the ClientAccountId for the client link.\n";
print "When adding a client link, the client link's ManagingCustomerId is set to the CustomerId of the current " .
       "authenticated user, who must be a Super Admin of the agency.\n";
print "Authenticate (e.g. edit AuthHelper.php) as an agency Super Admin user to send a client link invitation, " .
       "or unlink an existing client link.\n";
print "Authenticate (e.g. edit AuthHelper.php) as a client Super Admin user to accept a client link invitation.\n\n";

$ClientAccountId = 0; //<ClientAccountIdGoesHere>;

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

    // For this example we'll use the first account to get the agency customer ID.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $updateClientLinksResponse = null;

    // Specify the client link search criteria

    $pageInfo = new Paging();
    $pageInfo->Index = 0;    // The first page
    $pageInfo->Size = 100;   // The first 100 client links for this page of results

    $ordering = new OrderBy();
    $ordering->Field = OrderByField::Number;
    $ordering->Order = SortOrder::Ascending;     

    $predicate = new Predicate();
    $predicate->Field = "ClientAccountId";
    $predicate->Operator = PredicateOperator::In;
    $predicate->Value = $ClientAccountId; 

    // Search for client links that match the specified criteria.

    $clientLinks = CustomerManagementHelper::SearchClientLinks(
        $GLOBALS['CustomerProxy'], 
        array($ordering),
        $pageInfo,
        array($predicate));

    // Determine whether the agency is already managing the specified client account. 
    // If a link exists with status either Active, LinkInProgress, LinkPending, 
    // UnlinkInProgress, or UnlinkPending, the agency may not initiate a duplicate client link.

    $clientLink;
    $newLinkRequired = true;

    if (isset($clientLinks->ClientLink) && count((array)$clientLinks->ClientLink) > 0)
    {
        $clientLink = $clientLinks->ClientLink[0];
        printf("Current ClientLink Status: %s.\n\n", $clientLink->Status);

        switch ($clientLink->Status)
        {
            // The agency may choose to initiate the unlink process, 
            // which would terminate the existing relationship with the client. 
            case ClientLinkStatus::Active:
                $clientLink->Status = ClientLinkStatus::UnlinkRequested;
                $updateClientLinksResponse = CustomerManagementHelper::UpdateClientLinks(array($clientLink));
                print("The agency updated status: UnlinkRequested.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition or waiting for the StartDate.
            case ClientLinkStatus::LinkAccepted:
                print("The status is transitioning towards LinkInProgress.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::LinkInProgress:
                print("The status is transitioning towards Active.\n\n");
                $newLinkRequired = false;
                break;
            // When the status is LinkPending, either the agency or client may update the status.
            // The agency may choose to cancel the client link invitation; however, in this sample 
            // the client will accept the invitation. 
            // If the client does not accept or decline the invitation within 30 days, and if the agency
            // does not update the status to LinkCanceled, the system updates the status to LinkExpired.
            case ClientLinkStatus::LinkPending:
                //$clientLink->Status = ClientLinkStatus::LinkCanceled;
                //$updateClientLinksResponse = CustomerManagementHelper::UpdateClientLinks(array($clientLink));
                //print("The agency updated status: LinkCanceled.\n\n");
                $clientLink->Status = ClientLinkStatus::LinkAccepted;
                $updateClientLinksResponse = CustomerManagementHelper::UpdateClientLinks(array($clientLink));
                print("The client updated status: LinkAccepted.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkInProgress:
                print("The status is transitioning towards Inactive.\n\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkPending:
                print("The status is transitioning towards Inactive.\n\n");
                $newLinkRequired = false;
                break;
            // The link lifecycle has ended.  
            default:
                print("A new client link invitation is required.\n\n");
                break;
        }

        // Print errors if any occurred when updating the client link.
        if (!empty($updateClientLinksResponse))
        {
            CustomerManagementHelper::OutputPartialErrors($updateClientLinksResponse->OperationErrors,
                               $updateClientLinksResponse->PartialErrors);
        }
    }

    // If no links exist between the agency and specified client account, or a link exists with status  
    // either Inactive, LinkCanceled, LinkDeclined, LinkExpired, or LinkFailed, then the agency must
    // initiate a new client link.

    if($newLinkRequired)
    {
        $clientLink = new ClientLink();
        $clientLink->ClientAccountId = $ClientAccountId;
        $clientLink->ManagingCustomerId = $GLOBALS['AuthorizationData']->CustomerId;
        $clientLink->IsBillToClient = true;
        $clientLink->Name = "My Client Link";
        $clientLink->StartDate = null;
        $clientLink->SuppressNotification = false;
    
        $addClientLinksResponse = CustomerManagementHelper::AddClientLinks(array($clientLink));

        // Print errors if any occurred when adding the client link.
        CustomerManagementHelper::OutputPartialErrors($addClientLinksResponse->OperationErrors, $addClientLinksResponse->PartialErrors);
        print("The agency attempted to add a new ClientLink.\n\n");
    }

    // Get and print the current client link

    $clientLinks = CustomerManagementHelper::SearchClientLinks(
        array($ordering),
        $pageInfo,
        array($predicate));

    CustomerManagementHelper::OutputClientLinks($clientLinks);
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
