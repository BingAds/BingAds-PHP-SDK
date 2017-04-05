<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v10\CampaignManagement classes that will be used.
use Microsoft\BingAds\v10\CampaignManagement\AddNegativeKeywordsToEntitiesRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteNegativeKeywordsFromEntitiesRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetNegativeKeywordsByEntityIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddSharedEntityRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetSharedEntitiesByAccountIdRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateSharedEntitiesRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteSharedEntitiesRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddListItemsToSharedListRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetListItemsBySharedListRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteListItemsFromSharedListRequest;
use Microsoft\BingAds\v10\CampaignManagement\SetSharedEntityAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetSharedEntityAssociationsByEntityIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetSharedEntityAssociationsBySharedEntityIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteSharedEntityAssociationsRequest;
use Microsoft\BingAds\v10\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v10\CampaignManagement\Campaign;
use Microsoft\BingAds\v10\CampaignManagement\EntityNegativeKeyword;
use Microsoft\BingAds\v10\CampaignManagement\SharedEntityAssociation;
use Microsoft\BingAds\v10\CampaignManagement\SharedEntity;
use Microsoft\BingAds\v10\CampaignManagement\SharedList;
use Microsoft\BingAds\v10\CampaignManagement\SharedListItem;
use Microsoft\BingAds\v10\CampaignManagement\NegativeKeyword;
use Microsoft\BingAds\v10\CampaignManagement\NegativeKeywordList;
use Microsoft\BingAds\v10\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\v10\CampaignManagement\MatchType;

// Specify the Microsoft\BingAds\v9\CustomerManagement classes that will be used.
use Microsoft\BingAds\v9\CustomerManagement\GetUserRequest;
use Microsoft\BingAds\v9\CustomerManagement\SearchAccountsRequest;
use Microsoft\BingAds\v9\CustomerManagement\Paging;
use Microsoft\BingAds\v9\CustomerManagement\Predicate;
use Microsoft\BingAds\v9\CustomerManagement\PredicateOperator;
use Microsoft\BingAds\v9\CustomerManagement\Account;
use Microsoft\BingAds\v9\CustomerManagement\User;

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

    $GLOBALS['CustomerProxy'] = new ServiceClient(ServiceClientType::CustomerManagementVersion9, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Set the GetUser request parameter to an empty user identifier to get the current 
    // authenticated Bing Ads user, and then search for all accounts the user may access.

    $user = GetUser(null);

    // For this example we'll use the first account.

    $accounts = SearchAccountsByUserId($user->Id);
    $GLOBALS['AuthorizationData']->AccountId = $accounts->Account[0]->Id;
    $GLOBALS['AuthorizationData']->CustomerId = $accounts->Account[0]->ParentCustomerId;

    $GLOBALS['CampaignProxy'] = new ServiceClient(ServiceClientType::CampaignManagementVersion10, $GLOBALS['AuthorizationData'], AuthHelper::GetApiEnvironment());

    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;

    $campaigns[] = $campaign;

    // Add the campaign
    $addCampaignsResponse = AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $campaignIds = $addCampaignsResponse->CampaignIds->long;
    $campaignErrors = $addCampaignsResponse->PartialErrors;
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        $campaignErrors = $addCampaignsResponse->PartialErrors->BatchError;
    }

    // Output the new assigned campaign identifiers, as well as any partial errors
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);

    // You may choose to associate an exclusive set of negative keywords to an individual campaign 
    // or ad group. An exclusive set of negative keywords cannot be shared with other campaigns 
    // or ad groups. This sample only associates negative keywords with a campaign.

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->MatchType = MatchType::Phrase;
    $negativeKeyword->Text = "auto";
             
    $entityNegativeKeyword = new EntityNegativeKeyword();
    $entityNegativeKeyword->EntityId = $campaignIds[0];
    $entityNegativeKeyword->EntityType = "Campaign";
    $entityNegativeKeyword->NegativeKeywords = array($negativeKeyword);

    $addNegativeKeywordsToEntitiesResponse = AddNegativeKeywordsToEntities(array($entityNegativeKeyword));
    if((count((array)$addNegativeKeywordsToEntitiesResponse->NestedPartialErrors) == 0) 
        || !is_array($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection))
    {
        print "Added an exclusive set of negative keywords to the Campaign.\n\n";
        OutputNegativeKeywordIds($addNegativeKeywordsToEntitiesResponse->NegativeKeywordIds->IdCollection);
    }
    else
    {
        OutputNestedPartialErrors($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors->BatchErrorCollection);
    }

    $getNegativeKeywordsByEntityIdsResponse = GetNegativeKeywordsByEntityIds($campaignIds, "Campaign", $GLOBALS['AuthorizationData']->AccountId);
    if((count((array)$getNegativeKeywordsByEntityIdsResponse->PartialErrors) == 0) 
        || !is_array($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError))
    {
        print "Retrieved an exclusive set of negative keywords for the Campaign.\n\n";
        OutputEntityNegativeKeywords($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    }
    else
    {
        OutputPartialErrors($getNegativeKeywordsByEntityIdsResponse->PartialErrors->BatchError);
    }
       
    // If you attempt to delete a negative keyword without an identifier the operation will
    // succeed but will return partial errors corresponding to the index of the negative keyword
    // that was not deleted. 
    $nestedPartialErrors = DeleteNegativeKeywordsFromEntities(array($entityNegativeKeyword));
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";   
    }
    else
    {
        print "Attempt to DeleteNegativeKeywordsFromEntities without NegativeKeyword identifier partially fails by design.\n\n";
        OutputNestedPartialErrors($nestedPartialErrors->BatchErrorCollection);
    }

    // Delete the negative keywords with identifiers that were returned above.
    $nestedPartialErrors = DeleteNegativeKeywordsFromEntities($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    if ((count((array)$nestedPartialErrors) == 0) || !is_array($nestedPartialErrors->BatchErrorCollection))
    {
        print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";
    }
    else
    {
        OutputNestedPartialErrors($nestedPartialErrors->BatchErrorCollection);
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
       
    $addSharedEntityResponse = AddSharedEntity($encodedNegativeKeywordList, $negativeKeywords);
    $sharedEntityId = $addSharedEntityResponse->SharedEntityId;
    $listItemIds = $addSharedEntityResponse->ListItemIds;

    printf("NegativeKeywordList successfully added to account library and assigned identifer %d\n\n", $sharedEntityId);

    OutputNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords, 
        $listItemIds->long, 
        $addSharedEntityResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywordList->Id = $sharedEntityId;
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $GLOBALS['CampaignProxy']->GetNamespace());
    $negativeKeywords = GetListItemsBySharedList($encodedNegativeKeywordList);

    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        OutputNegativeKeywords($negativeKeywords->SharedListItem);
    }             

    // To update the list of negative keywords, you must either add or remove from the list
    // using the respective AddListItemsToSharedList or DeleteListItemsFromSharedList operations.
    // To remove the negative keywords from the list pass the negative keyword identifers
    // and negative keyword list (SharedEntity) identifer.

    $partialErrors = DeleteListItemsFromSharedList($listItemIds, $encodedNegativeKeywordList);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted most recently added negative keywords from negative keyword list.\n\n";

    }
    else
    {
        OutputPartialErrors($partialErrors);
    }
       
    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = GetListItemsBySharedList($encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        OutputNegativeKeywords($negativeKeywords->SharedListItem);
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

    $addListItemsToSharedListResponse = AddListItemsToSharedList(
        $negativeKeywords,
        $encodedNegativeKeywordList);
    $listItemIds = $addListItemsToSharedListResponse->ListItemIds;

    OutputNegativeKeywordResults(
        $sharedEntityId,
        $negativeKeywords, 
        $listItemIds->long, 
        $addListItemsToSharedListResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywords = GetListItemsBySharedList($encodedNegativeKeywordList);
    if((count((array)$negativeKeywords) == 0) || !is_array($negativeKeywords->SharedListItem))
    {
        print "None\n\n";
    }
    else
    {
        OutputNegativeKeywords($negativeKeywords->SharedListItem);
    }

    // You can update the name of the negative keyword list. 

    $negativeKeywordList->Name = "My Updated Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar($negativeKeywordList, SOAP_ENC_OBJECT, 'NegativeKeywordList', $GLOBALS['CampaignProxy']->GetNamespace());

    $partialErrors = UpdateSharedEntities(array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Updated Negative Keyword List Name to %s.\n\n", $negativeKeywordList->Name);
    }
    else
    {
        OutputPartialErrors($partialErrors);
    }

    // Get and print the negative keyword lists and return the list of identifiers.

    $sharedEntityType = "NegativeKeywordList";
    $sharedEntityIds = GetAndOutputSharedEntityIdentifiers($sharedEntityType);
       
    // Negative keywords were added to the negative keyword list above. You can associate the 
    // shared list of negative keywords with a campaign with or without negative keywords. 
    // Shared negative keyword lists cannot be associated with an ad group. An ad group can only 
    // be assigned an exclusive set of negative keywords. 

    $associations = array();
    $association = new SharedEntityAssociation();
    $association->EntityId = $campaignIds[0];
    $association->EntityType = "Campaign";
    $association->SharedEntityId = $sharedEntityId;
    $association->SharedEntityType = "NegativeKeywordList";
    $associations[] = $association;

    $partialErrors = SetSharedEntityAssociations($associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Associated CampaignId %d with Negative Keyword List Id %d.\n\n", $campaignIds[0], $sharedEntityId);
    }
    else
    {
        OutputPartialErrors($partialErrors);
    }
       
    // Get and print the associations either by Campaign or NegativeKeywordList identifier.
    $getSharedEntityAssociationsByEntityIdsResponse = 
        GetSharedEntityAssociationsByEntityIds(array($campaignIds[0]), "Campaign", "NegativeKeywordList");
    if(isset($getSharedEntityAssociationsByEntityIdsResponse->Associations) && 
       isset($getSharedEntityAssociationsByEntityIdsResponse->Associations->SharedEntityAssociation))
    {
        OutputSharedEntityAssociations($getSharedEntityAssociationsByEntityIdsResponse->Associations->SharedEntityAssociation);
    }
    OutputPartialErrors($getSharedEntityAssociationsByEntityIdsResponse->PartialErrors);
       
    $getSharedEntityAssociationsBySharedEntityIdsResponse = 
        GetSharedEntityAssociationsBySharedEntityIds("Campaign", array($sharedEntityIds[count(array($sharedEntityIds))-1]), "NegativeKeywordList");
    if(isset($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations) && 
       isset($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations->SharedEntityAssociation))
    {
        OutputSharedEntityAssociations($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations->SharedEntityAssociation);
    }
    OutputPartialErrors($getSharedEntityAssociationsBySharedEntityIdsResponse->PartialErrors);
       
    // Explicitly delete the association between the campaign and the negative keyword list.

    $partialErrors = DeleteSharedEntityAssociations($associations);
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        print "Deleted NegativeKeywordList associations\n\n";
    }
    else
    {
        OutputPartialErrors($partialErrors);
    }
       
    // Delete the campaign and any remaining assocations. 

    DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $campaignIds[0]);

    // DeleteCampaigns does not delete the negative keyword list from the account's library. 
    // Call the DeleteSharedEntities operation to delete the shared entities.

    $partialErrors = DeleteSharedEntities(array($encodedNegativeKeywordList));
    if((count((array)$partialErrors) == 0) || !is_array($partialErrors))
    {
        printf("Deleted Negative Keyword List (SharedEntity) Id %d\n\n", $sharedEntityId);
    }
    else
    {
        OutputPartialErrors($partialErrors);
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

// Adds one or more campaigns to the specified account.

function AddCampaigns($accountId, $campaigns)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;
    
    return $GLOBALS['Proxy']->GetService()->AddCampaigns($request);
}

// Deletes one or more campaigns from the specified account.

function DeleteCampaigns($accountId, $campaignIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteCampaignsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;
    
    $GLOBALS['CampaignProxy']->GetService()->DeleteCampaigns($request);
}

// Adds list items such as negative keywords to the corresponding list.

function AddListItemsToSharedList(
         $listItems, 
         $sharedList)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddListItemsToSharedListRequest();
    $request->ListItems = $listItems;
    $request->SharedList = $sharedList;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddListItemsToSharedList($request);
}

// Adds a shared entity such as a negative keyword list to the account's library. 
// Lists in the account's library can be associated with any campaign within the account.

function AddSharedEntity(
         $sharedEntity, 
         $listItems)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddSharedEntityRequest();
    $request->SharedEntity = $sharedEntity;
    $request->ListItems = $listItems;
    
    return $GLOBALS['CampaignProxy']->GetService()->AddSharedEntity($request);
}

// Deletes list items such as negative keywords from the corresponding list. 

function DeleteListItemsFromSharedList(
         $listItemIds, 
         $sharedList)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteListItemsFromSharedListRequest();
    $request->ListItemIds = $listItemIds;
    $request->SharedList = $sharedList;
    
    return $GLOBALS['CampaignProxy']->GetService()->DeleteListItemsFromSharedList($request)->PartialErrors;
}

// Deletes shared entities such as negative keyword lists from the account's library. 

function DeleteSharedEntities($sharedEntities)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteSharedEntitiesRequest();
    $request->SharedEntities = $sharedEntities;
        
    return $GLOBALS['CampaignProxy']->GetService()->DeleteSharedEntities($request)->PartialErrors;
}

// Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign. 

function DeleteSharedEntityAssociations($associations)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteSharedEntityAssociationsRequest();
    $request->Associations = $associations;
        
    return $GLOBALS['CampaignProxy']->GetService()->DeleteSharedEntityAssociations($request)->PartialErrors;
}

// Gets the list items such as the negative keywords of a negative keyword list.  

function GetListItemsBySharedList($sharedList)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetListItemsBySharedListRequest();
    $request->SharedList = $sharedList;
        
    return $GLOBALS['CampaignProxy']->GetService()->GetListItemsBySharedList($request)->ListItems;
}

// Gets the shared entities such as negative keyword lists from the account's library.  

function GetSharedEntitiesByAccountId($sharedEntityType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetSharedEntitiesByAccountIdRequest();
    $request->SharedEntityType = $sharedEntityType;
        
    return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntitiesByAccountId($request)->SharedEntities;
}

// Gets associations between a campaign and a shared entity such as a negative keyword list. 
// You can request associations by associated entity identifiers. 

function GetSharedEntityAssociationsByEntityIds(
         $entityIds,
         $entityType,
         $sharedEntityType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetSharedEntityAssociationsByEntityIdsRequest();
    $request->EntityIds = $entityIds;
    $request->EntityType = $entityType;
    $request->SharedEntityType = $sharedEntityType;
        
    return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntityAssociationsByEntityIds($request);
}

// Gets associations between a campaign and a shared entity such as a negative keyword list. 
// You can request associations by shared entity identifiers. 

function GetSharedEntityAssociationsBySharedEntityIds(
         $entityType,
         $sharedEntityIds,
         $sharedEntityType)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetSharedEntityAssociationsBySharedEntityIdsRequest();
    $request->EntityType = $entityType;
    $request->SharedEntityIds = $sharedEntityIds;
    $request->SharedEntityType = $sharedEntityType;
        
    return $GLOBALS['CampaignProxy']->GetService()->GetSharedEntityAssociationsBySharedEntityIds($request);
}

// Sets the association between a campaign and a shared entity such as a negative keyword list. 

function SetSharedEntityAssociations($associations)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new SetSharedEntityAssociationsRequest();
    $request->Associations = $associations;
        
    return $GLOBALS['CampaignProxy']->GetService()->SetSharedEntityAssociations($request)->PartialErrors;
}

// Updates shared entities such as negative keyword lists within the account's library.  

function UpdateSharedEntities($sharedEntities)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new UpdateSharedEntitiesRequest();
    $request->SharedEntities = $sharedEntities;
        
    return $GLOBALS['CampaignProxy']->GetService()->UpdateSharedEntities($request)->PartialErrors;
}

// Adds negative keywords to the specified campaign or ad group. 

function AddNegativeKeywordsToEntities($entityNegativeKeywords)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new AddNegativeKeywordsToEntitiesRequest();
    $request->EntityNegativeKeywords = $entityNegativeKeywords;
        
    return $GLOBALS['CampaignProxy']->GetService()->AddNegativeKeywordsToEntities($request);
}

// Deletes negative keywords from the specified campaign or ad group.  

function DeleteNegativeKeywordsFromEntities($entityNegativeKeywords)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new DeleteNegativeKeywordsFromEntitiesRequest();
    $request->EntityNegativeKeywords = $entityNegativeKeywords;
        
    return $GLOBALS['CampaignProxy']->GetService()->DeleteNegativeKeywordsFromEntities($request)->NestedPartialErrors;
}

// Gets the negative keywords that are only associated with the specified campaigns or ad groups. 

function GetNegativeKeywordsByEntityIds(
         $entityIds,
         $entityType,
         $parentEntityId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

    $request = new GetNegativeKeywordsByEntityIdsRequest();
    $request->EntityIds = $entityIds;
    $request->EntityType = $entityType;
    $request->ParentEntityId = $parentEntityId;
        
    return $GLOBALS['CampaignProxy']->GetService()->GetNegativeKeywordsByEntityIds($request);
}

// Outputs the campaign identifiers, as well as any partial errors.

function OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $partialErrors)
{
    if(empty($campaignIds) || empty($campaignIds) || count($campaigns) != count($campaignIds))
    {
        return;
    }

    // Output the identifier of each successfully added campaign.

    for ($index = 0; $index < count($campaigns); $index++ )
    {
        // The array of campaign identifiers equals the size of the attempted campaign. If the element 
        // is not empty, the campaign at that index was added successfully and has a campaign identifer. 

        if (!empty($campaignIds[$index]))
        {
            printf("Campaign[%d] (Name:%s) successfully added and assigned CampaignId %s\n", 
                $index, 
                $campaigns[$index]->Name, 
                $campaignIds[$index] );
        }
    }

    // Output the error details for any campaign not successfully added.
    // Note also that multiple error reasons may exist for the same attempted campaign. 

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddCampaigns.

        printf("\nCampaign[%d] (Name:%s) not added due to the following error:\n", $error->Index, $campaigns[$error->Index]->Name);

        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Outputs the negative keyword identifiers added to each campaign or ad group entity. 
// The IdCollection items are available by calling AddNegativeKeywordsToEntities. 

function OutputNegativeKeywordIds($idCollections)
{
    if(count((array)$idCollections) == 0)
    {
        return;
    }

    for ($index = 0; $index < count($idCollections); $index++)
    {
        printf("NegativeKeyword Ids at entity index %d:\n\n", $index);
        foreach ($idCollections[$index]->Ids->long as $id)
        {
            printf("\tId: %s\n\n", $id);
        }
    }
}

// Outputs the negative keywords 

function OutputNegativeKeywords($sharedListItems)
{
    if(count((array)$sharedListItems) == 0)
    {
        return;
    }

    foreach ($sharedListItems as $sharedListItem)
    {
        if($sharedListItem->Type == "NegativeKeyword")
        {
            printf("\tNegativeKeyword Text: %s\n", $sharedListItem->Text);
            printf("\tId: %s\n", $sharedListItem->Id);
            printf("\tMatchType: %s\n\n", $sharedListItem->MatchType);
        }
    }
}

// Outputs a list of EntityNegativeKeyword objects  

function OutputEntityNegativeKeywords($entityNegativeKeywords)
{
    if(count((array)$entityNegativeKeywords) == 0)
    {
        return;
    }

    print "EntityNegativeKeyword items:\n\n";
    foreach ($entityNegativeKeywords as $entityNegativeKeyword)
    {
        printf("\tEntityId: %s\n", $entityNegativeKeyword->EntityId);
        printf("\tEntityType: %s\n\n", $entityNegativeKeyword->EntityType);
        OutputNegativeKeywords($entityNegativeKeyword->NegativeKeywords->NegativeKeyword);
    }
}

// Gets the negative keywords that are only associated with the specified campaigns or ad groups. 

function GetAndOutputSharedEntityIdentifiers($sharedEntityType)
{
    $sharedEntities = GetSharedEntitiesByAccountId($sharedEntityType);
    $sharedEntityIds = array();

    if((count((array)$sharedEntities) != 0) && is_array($sharedEntities->SharedEntity))
    {
        for ($index = 0; $index < count($sharedEntities->SharedEntity); $index++)
        {
            $sharedEntity = $sharedEntities->SharedEntity[$index];
            if(!is_null($sharedEntity->Id))
            {
                $sharedEntityIds[] = $sharedEntity->Id;
                printf("SharedEntity[%d] (%s) has SharedEntity Id %s.\n\n",
                       $index,
                       $sharedEntities->SharedEntity[$index]->Name,
                       $sharedEntities->SharedEntity[$index]->Id);
            }
        }
    }
    return $sharedEntityIds;
}

// Outputs a list of BatchError objects that represent partial errors while managing negative keywords.

function OutputPartialErrors($partialErrors)
{
    if(count((array)$partialErrors) == 0)
    {
        return;
    }

    print "BatchError (PartialErrors) items:\n\n";
    foreach ($partialErrors->BatchError as $error)
    {
        printf("\tIndex: %d\n", $error->Index);
        printf("\tCode: %d\n", $error->Code);
        printf("\tErrorCode: %s\n", $error->ErrorCode);
        printf("\tMessage: %s\n\n", $error->Message);

        // In the case of an EditorialError, more details are available
        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("\tDisapprovedText: %s\n", $error->DisapprovedText);
            printf("\tLocation: %s\n", $error->Location);
            printf("\tPublisherCountry: %s\n", $error->PublisherCountry);
            printf("\tReasonCode: %d\n\n", $error->ReasonCode);
        }
    }
}

// Outputs the list item identifiers, as well as any partial errors

function OutputNegativeKeywordResults(
         $sharedListId,
         $sharedListItems, 
         $sharedListItemIds, 
         $partialErrors)
{
    if(count((array)$sharedListItemIds) == 0)
    {
        return;
    }

    for ($index = 0; $index < count($sharedListItemIds); $index++)
    {
        // Determine if the SharedListItem is a NegativeKeyword. 
        if($sharedListItems[$index]->enc_stype === "NegativeKeyword")
        {
            // Determine if the corresponding index has a valid identifier
            if($sharedListItemIds[$index] > 0)
            { 
                printf("NegativeKeyword[%d] (%s) successfully added to NegativeKeywordList (%d) and assigned Negative Keyword Id %s.\n",
                        $index,
                        $sharedListItems[$index]->enc_value->Text,
                        $sharedListId,
                        $sharedListItemIds[$index]);
            }
        }
        else
        {
            print "SharedListItem is not a NegativeKeyword.\n\n";
        }
    }

    print "\n";

    OutputPartialErrors($partialErrors);
}

// Outputs a list of SharedEntityAssociation objects.

function OutputSharedEntityAssociations($associations)
{
    if(count((array)$associations) == 0)
    {
        return;
    }

    printf("SharedEntityAssociation items:\n\n");
    foreach ($associations as $sharedEntityAssociation)
    {
        printf("\tEntityId: %s\n", $sharedEntityAssociation->EntityId);
        printf("\tEntityType: %s\n", $sharedEntityAssociation->EntityType);
        printf("\tSharedEntityId: %s\n", $sharedEntityAssociation->SharedEntityId);
        printf("\tSharedEntityType: %s\n\n", $sharedEntityAssociation->SharedEntityType);
    }
}

// Outputs a list of BatchErrorCollection objects that represent partial errors while managing 
// negative keywords.

function OutputNestedPartialErrors($nestedPartialErrors)
{
    if(count((array)$nestedPartialErrors) == 0)
    {
        return;
    }

    printf("BatchErrorCollection (NestedPartialErrors) items:\n\n");
    foreach ($nestedPartialErrors as $collection)
    {
        // The top level list index corresponds to the campaign or ad group index identifier.
        if (!empty($collection))
        {
            if (!is_null($collection->Code))
            {
                printf("\tIndex: %d", $collection->Index);
                printf("\tCode: %d", $collection->Code);
                printf("\tErrorCode: %s", $collection->ErrorCode);
                printf("\tMessage: %s\n\n", $collection->Message);
            }

            OutputPartialErrors($collection->BatchErrors);
        }
    }
}

?>