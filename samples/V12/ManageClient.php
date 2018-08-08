<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/CustomerManagementExampleHelper.php";

include __DIR__ . "/AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CustomerManagement classes that will be used.
use Microsoft\BingAds\V12\CustomerManagement\Paging;
use Microsoft\BingAds\V12\CustomerManagement\Predicate;
use Microsoft\BingAds\V12\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\V12\CustomerManagement\Account;
use Microsoft\BingAds\V12\CustomerManagement\User;
use Microsoft\BingAds\V12\CustomerManagement\ClientLink;
use Microsoft\BingAds\V12\CustomerManagement\ClientLinkStatus;
use Microsoft\BingAds\V12\CustomerManagement\OrderBy;
use Microsoft\BingAds\V12\CustomerManagement\OrderByField;
use Microsoft\BingAds\V12\CustomerManagement\SortOrder;
use Microsoft\BingAds\V12\CustomerManagement\OperationError;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CustomerManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CustomerManagementProxy'] = null; 

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
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

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

    $clientLinks = CustomerManagementExampleHelper::SearchClientLinks(
        $GLOBALS['CustomerManagementProxy'], 
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
                $updateClientLinksResponse = CustomerManagementExampleHelper::UpdateClientLinks(array($clientLink));
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
                //$updateClientLinksResponse = CustomerManagementExampleHelper::UpdateClientLinks(array($clientLink));
                //print("The agency updated status: LinkCanceled.\n\n");
                $clientLink->Status = ClientLinkStatus::LinkAccepted;
                $updateClientLinksResponse = CustomerManagementExampleHelper::UpdateClientLinks(array($clientLink));
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
            CustomerManagementExampleHelper::OutputArrayOfOperationError($updateClientLinksResponse->OperationErrors);
            foreach ($updateClientLinksResponse->PartialErrors as $operationErrors)
            {
                CustomerManagementExampleHelper::OutputArrayOfOperationError($operationErrors);
            }
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
    
        $addClientLinksResponse = CustomerManagementExampleHelper::AddClientLinks(array($clientLink));

        // Print errors if any occurred when adding the client link.
        CustomerManagementExampleHelper::OutputArrayOfBatchError($addClientLinksResponse->OperationErrors, $addClientLinksResponse->PartialErrors);
        print("The agency attempted to add a new ClientLink.\n\n");
    }

    // Get and print the current client link

    $clientLinks = CustomerManagementExampleHelper::SearchClientLinks(
        array($ordering),
        $pageInfo,
        array($predicate));

    CustomerManagementExampleHelper::OutputArrayOfClientLink($clientLinks);
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
