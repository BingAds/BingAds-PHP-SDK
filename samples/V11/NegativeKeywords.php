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
use Microsoft\BingAds\V11\CampaignManagement\Campaign;
use Microsoft\BingAds\V11\CampaignManagement\EntityNegativeKeyword;
use Microsoft\BingAds\V11\CampaignManagement\SharedEntityAssociation;
use Microsoft\BingAds\V11\CampaignManagement\SharedEntity;
use Microsoft\BingAds\V11\CampaignManagement\SharedList;
use Microsoft\BingAds\V11\CampaignManagement\SharedListItem;
use Microsoft\BingAds\V11\CampaignManagement\NegativeKeyword;
use Microsoft\BingAds\V11\CampaignManagement\NegativeKeywordList;
use Microsoft\BingAds\V11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V11\CampaignManagement\MatchType;

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

    // For this example we'll use the first account.

    $accounts = CustomerManagementHelper::SearchAccountsByUserId($user->Id)->Accounts;
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion11, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";

    $campaigns[] = $campaign;

    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementHelper::AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds->long;
    CampaignManagementHelper::OutputIds($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addCampaignsResponse->PartialErrors->BatchError);
    }

    // You may choose to associate an exclusive set of negative keywords to an individual campaign 
    // or ad group. An exclusive set of negative keywords cannot be shared with other campaigns 
    // or ad groups. This sample only associates negative keywords with a campaign.

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->MatchType = MatchType::Phrase;
    $negativeKeyword->Text = "auto";
             
    $entityNegativeKeyword = new EntityNegativeKeyword();
    $entityNegativeKeyword->EntityId = $nillableCampaignIds[0];
    $entityNegativeKeyword->EntityType = "Campaign";
    $entityNegativeKeyword->NegativeKeywords = array($negativeKeyword);

    $addNegativeKeywordsToEntitiesResponse = CampaignManagementHelper::AddNegativeKeywordsToEntities(array($entityNegativeKeyword));
    if((count((array)$addNegativeKeywordsToEntitiesResponse->NestedPartialErrors) == 0) 
        || !is_array($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection))
    {
        print "Added an exclusive set of negative keywords to the Campaign.\n\n";
        CampaignManagementHelper::OutputNegativeKeywordIds($addNegativeKeywordsToEntitiesResponse->NegativeKeywordIds->IdCollection);
    }
    else
    {
        CampaignManagementHelper::OutputBatchErrorCollections($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection);
    }

    $getNegativeKeywordsByEntityIdsResponse = CampaignManagementHelper::GetNegativeKeywordsByEntityIds($nillableCampaignIds, "Campaign", $GLOBALS['AuthorizationData']->AccountId);
    if((count((array)$getNegativeKeywordsByEntityIdsResponse->PartialErrors) == 0) 
        || !is_array($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError))
    {
        print "Retrieved an exclusive set of negative keywords for the Campaign.\n\n";
        CampaignManagementHelper::OutputEntityNegativeKeywords($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError);
    }
       
    // If you attempt to delete a negative keyword without an identifier the operation will
    // succeed but will return partial errors corresponding to the index of the negative keyword
    // that was not deleted. 
    $nestedPartialErrors = CampaignManagementHelper::DeleteNegativeKeywordsFromEntities(array($entityNegativeKeyword));
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";   
    }
    else
    {
        print "Attempt to DeleteNegativeKeywordsFromEntities without NegativeKeyword identifier partially fails by design.\n\n";
        CampaignManagementHelper::OutputBatchErrorCollections($nestedPartialErrors->BatchErrorCollection);
    }

    // Delete the negative keywords with identifiers that were returned above.
    $nestedPartialErrors = CampaignManagementHelper::DeleteNegativeKeywordsFromEntities($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";
    }
    else
    {
        CampaignManagementHelper::OutputBatchErrorCollections($nestedPartialErrors->BatchErrorCollection);
    }

    // Negative keywords can also be added and deleted from a shared negative keyword list. 
    // The negative keyword list can be shared or associated with multiple campaigns.
    // NegativeKeywordList inherits from SharedList which inherits from SharedEntity.

    $negativeKeywordList = new NegativeKeywordList();
    $negativeKeywordList->Name = "My Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $GLOBALS['CampaignProxy']->GetNamespace());

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    // You can create a new list for negative keywords with or without negative keywords.
       
    $addSharedEntityResponse = CampaignManagementHelper::AddSharedEntity($encodedNegativeKeywordList, $negativeKeywords);
    $sharedEntityId = $addSharedEntityResponse->SharedEntityId;
    $listItemIds = $addSharedEntityResponse->ListItemIds;

    printf("NegativeKeywordList successfully added to account library and assigned identifer %d\n\n", $sharedEntityId);

    CampaignManagementHelper::OutputNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords, 
        $listItemIds->long, 
        $addSharedEntityResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywordList->Id = $sharedEntityId;
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords = CampaignManagementHelper::GetListItemsBySharedList($encodedNegativeKeywordList);

    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        CampaignManagementHelper::OutputNegativeKeywords($negativeKeywords->SharedListItem);
    }             

    // To update the list of negative keywords, you must either add or remove from the list
    // using the respective AddListItemsToSharedList or DeleteListItemsFromSharedList operations.
    // To remove the negative keywords from the list pass the negative keyword identifers
    // and negative keyword list (SharedEntity) identifer.

    $partialErrors = CampaignManagementHelper::DeleteListItemsFromSharedList($listItemIds, $encodedNegativeKeywordList);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted most recently added negative keywords from negative keyword list.\n\n";

    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($partialErrors);
    }
       
    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = CampaignManagementHelper::GetListItemsBySharedList($encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        CampaignManagementHelper::OutputNegativeKeywords($negativeKeywords->SharedListItem);
    }
       
    // Whether you created the list with or without negative keywords, more can be added 
    // using the AddListItemsToSharedList operation.

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar($negativeKeyword, SOAP_ENC_OBJECT, 'NegativeKeyword', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $addListItemsToSharedListResponse = CampaignManagementHelper::AddListItemsToSharedList(
        $negativeKeywords,
        $encodedNegativeKeywordList);
    $listItemIds = $addListItemsToSharedListResponse->ListItemIds;

    CampaignManagementHelper::OutputNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords, 
        $listItemIds->long, 
        $addListItemsToSharedListResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = CampaignManagementHelper::GetListItemsBySharedList($encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        CampaignManagementHelper::OutputNegativeKeywords($negativeKeywords->SharedListItem);
    }

    // You can update the name of the negative keyword list. 

    $negativeKeywordList->Name = "My Updated Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $GLOBALS['CampaignProxy']->GetNamespace());

    $partialErrors = CampaignManagementHelper::UpdateSharedEntities(array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Updated Negative Keyword List Name to %s.\n\n", $negativeKeywordList->Name);
    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($partialErrors);
    }

    // Get and print the negative keyword lists and return the list of identifiers.

    $sharedEntityType = "NegativeKeywordList";
    $sharedEntityIds = CampaignManagementHelper::GetAndOutputSharedEntityIdentifiers($sharedEntityType);
       
    // Negative keywords were added to the negative keyword list above. You can associate the 
    // shared list of negative keywords with a campaign with or without negative keywords. 
    // Shared negative keyword lists cannot be associated with an ad group. An ad group can only 
    // be assigned an exclusive set of negative keywords. 

    $associations = array();
    $association = new SharedEntityAssociation();
    $association->EntityId = $nillableCampaignIds[0];
    $association->EntityType = "Campaign";
    $association->SharedEntityId = $sharedEntityId;
    $association->SharedEntityType = "NegativeKeywordList";
    $associations[] = $association;

    $partialErrors = CampaignManagementHelper::SetSharedEntityAssociations($associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Associated CampaignId %d with Negative Keyword List Id %d.\n\n", $nillableCampaignIds[0], $sharedEntityId);
    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($partialErrors);
    }
       
    // Get and print the associations either by Campaign or NegativeKeywordList identifier.
    $getSharedEntityAssociationsByEntityIdsResponse = 
        CampaignManagementHelper::GetSharedEntityAssociationsByEntityIds(array($nillableCampaignIds[0]), "Campaign", "NegativeKeywordList");
    if(isset($getSharedEntityAssociationsByEntityIdsResponse->Associations) && 
       isset($getSharedEntityAssociationsByEntityIdsResponse->Associations->SharedEntityAssociation))
    {
        CampaignManagementHelper::OutputSharedEntityAssociations($getSharedEntityAssociationsByEntityIdsResponse->Associations->SharedEntityAssociation);
    }
    CampaignManagementHelper::OutputPartialErrors($getSharedEntityAssociationsByEntityIdsResponse->PartialErrors);
       
    $getSharedEntityAssociationsBySharedEntityIdsResponse = 
        CampaignManagementHelper::GetSharedEntityAssociationsBySharedEntityIds("Campaign", array($sharedEntityIds[count(array($sharedEntityIds))-1]), "NegativeKeywordList");
    if(isset($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations) && 
       isset($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations->SharedEntityAssociation))
    {
        CampaignManagementHelper::OutputSharedEntityAssociations($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations->SharedEntityAssociation);
    }
    CampaignManagementHelper::OutputPartialErrors($getSharedEntityAssociationsBySharedEntityIdsResponse->PartialErrors);
       
    // Explicitly delete the association between the campaign and the negative keyword list.

    $partialErrors = CampaignManagementHelper::DeleteSharedEntityAssociations($associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted NegativeKeywordList associations\n\n";
    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($partialErrors);
    }
       
    // Delete the campaign and any remaining assocations. 

    CampaignManagementHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds[0]);

    // DeleteCampaigns does not delete the negative keyword list from the account's library. 
    // Call the DeleteSharedEntities operation to delete the shared entities.

    $partialErrors = CampaignManagementHelper::DeleteSharedEntities(array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Deleted Negative Keyword List (SharedEntity) Id %d\n\n", $sharedEntityId);
    }
    else
    {
        CampaignManagementHelper::OutputPartialErrors($partialErrors);
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
	
    // Campaign Management service operations can throw AdApiFaultDetail.
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
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
                    break;
            }
        }
    }

    // Campaign Management service operations can throw ApiFaultDetail.
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        // If the BatchError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
            ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

            foreach ($errors as $error)
            {
                printf("BatchError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the EditorialError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
            ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

            foreach ($errors as $error)
            {
                printf("EditorialError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code output above.\n";
                        break;
                }
            }
        }

        // If the OperationError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
            ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
            : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

            foreach ($errors as $error)
            {
                print "OperationError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
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
