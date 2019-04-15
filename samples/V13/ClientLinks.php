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
use Microsoft\BingAds\V13\CustomerManagement\Paging;
use Microsoft\BingAds\V13\CustomerManagement\Predicate;
use Microsoft\BingAds\V13\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\V13\CustomerManagement\ClientLink;
use Microsoft\BingAds\V13\CustomerManagement\ClientLinkStatus;
use Microsoft\BingAds\V13\CustomerManagement\OrderBy;
use Microsoft\BingAds\V13\CustomerManagement\OrderByField;
use Microsoft\BingAds\V13\CustomerManagement\SortOrder;
use Microsoft\BingAds\V13\CustomerManagement\OperationError;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CustomerManagementExampleHelper;

// How to use agency credentials to invite a client, and use client credentials to accept the invitation. 
// Run this sample multiple times alternating between agency and client credentials 
// to update and observe the status change, for example from LinkPending to LinkAccepted to Active.

print "You must edit this example to provide the ClientAccountId for the client link. " .
    "When adding a client link, the client link's ManagingCustomerId is set to the CustomerId " .
    "of the current authenticated user, who must be a Super Admin of the agency. " .
    "Login as an agency Super Admin user to send a client link invitation, or unlink an existing client link. " .
    "Login as a client Super Admin user to accept a client link invitation.\r\n";

// REQUIRED: The Client Account Id that you want to access.
$ClientAccountId = 0; 

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    $updateClientLinksResponse = null;

    // Set the client link search criteria.

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

    // Search for client links that match the criteria.

    print("-----\r\nSearchClientLinks:\r\n");
    $clientLinks = CustomerManagementExampleHelper::SearchClientLinks(
        array($predicate),
        array($ordering),
        $pageInfo
    );
    print("ClientLinks:\r\n");
    CustomerManagementExampleHelper::OutputArrayOfClientLink($clientLinks);

    print "-----\r\nLast SOAP request/response:\r\n";
    printf("Fault Code: %s\r\nFault String: %s\r\n", $e->faultcode, $e->faultstring);
	print $GLOBALS['Proxy']->GetWsdl() . "\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\r\n";
	print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\r\n";

    // Determine whether the agency is already managing the specified client account. 
    // If a link exists with status either Active, LinkInProgress, LinkPending, 
    // UnlinkInProgress, or UnlinkPending, the agency may not initiate a duplicate client link.

    $clientLink;
    $newLinkRequired = true;

    if (isset($clientLinks->ClientLink) && count((array)$clientLinks->ClientLink) > 0)
    {
        $clientLink = $clientLinks->ClientLink[0];
        printf("Current ClientLink Status: %s.\r\n", $clientLink->Status);

        switch ($clientLink->Status)
        {
            // The agency may choose to initiate the unlink process, 
            // which would terminate the existing relationship with the client. 
            case ClientLinkStatus::Active:
                $clientLink->Status = ClientLinkStatus::UnlinkRequested;
                print("-----\r\nUpdateClientLinks:\r\n");
                $updateClientLinksResponse = CustomerManagementExampleHelper::UpdateClientLinks(
                    array($clientLink)
                );
                print("UnlinkRequested\r\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition or waiting for the StartDate.
            case ClientLinkStatus::LinkAccepted:
                print("The status is transitioning towards LinkInProgress.\r\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::LinkInProgress:
                print("The status is transitioning towards Active.\r\n");
                $newLinkRequired = false;
                break;
            // When the status is LinkPending, either the agency or client may update the status.
            // The agency may choose to cancel the client link invitation; however, in this sample 
            // the client will accept the invitation. 
            // If the client does not accept or decline the invitation within 30 days, and if the agency
            // does not update the status to LinkCanceled, the system updates the status to LinkExpired.
            case ClientLinkStatus::LinkPending:
                $clientLink->Status = ClientLinkStatus::LinkAccepted;
                print("-----\r\nUpdateClientLinks:\r\n");
                $updateClientLinksResponse = CustomerManagementExampleHelper::UpdateClientLinks(
                    array($clientLink)
                );
                print("LinkAccepted\r\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkInProgress:
                print("The status is transitioning towards Inactive.\r\n");
                $newLinkRequired = false;
                break;
            // Waiting on a system status transition.
            case ClientLinkStatus::UnlinkPending:
                print("The status is transitioning towards Inactive.\r\n");
                $newLinkRequired = false;
                break;
            // The link lifecycle has ended.  
            default:
                print("A new client link invitation is required.\r\n");
                break;
        }

        // Output errors if any occurred when updating the client link.
        
        if (!empty($updateClientLinksResponse))
        {
            print("OperationErrors:\r\n");
            CustomerManagementExampleHelper::OutputArrayOfOperationError($updateClientLinksResponse->OperationErrors);
            print("PartialErrors:\r\n");
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
        $clientLink->ClientEntityId = $ClientAccountId;
        $clientLink->ManagingCustomerId = $GLOBALS['AuthorizationData']->CustomerId;
        $clientLink->IsBillToClient = true;
        $clientLink->Name = "My Client Link";
        $clientLink->StartDate = null;
        $clientLink->SuppressNotification = false;
    
        print("-----\r\nAddClientLinks:\r\n");
        $addClientLinksResponse = CustomerManagementExampleHelper::AddClientLinks(
            array($clientLink)
        );
        print("OperationErrors:\r\n");
        CustomerManagementExampleHelper::OutputArrayOfOperationError($addClientLinksResponse->OperationErrors);
        print("PartialErrors:\r\n");
        foreach ($addClientLinksResponse->PartialErrors as $operationErrors)
        {
            CustomerManagementExampleHelper::OutputArrayOfOperationError($operationErrors);
        }
    }

    // Output the client links after any status updates above.

    print("-----\r\nSearchClientLinks:\r\n");
    $clientLinks = CustomerManagementExampleHelper::SearchClientLinks(
        array($predicate),
        array($ordering),
        $pageInfo
    );
    print("ClientLinks:\r\n");
    CustomerManagementExampleHelper::OutputArrayOfClientLink($clientLinks);
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
        print $e->getCode()." ".$e->getMessage()."\r\n";
        print $e->getTraceAsString()."\r\n";
    }
}
