<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/AuthHelper.php";
include "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\EntityNegativeKeyword;
use Microsoft\BingAds\V12\CampaignManagement\SharedEntityAssociation;
use Microsoft\BingAds\V12\CampaignManagement\SharedEntity;
use Microsoft\BingAds\V12\CampaignManagement\SharedList;
use Microsoft\BingAds\V12\CampaignManagement\SharedListItem;
use Microsoft\BingAds\V12\CampaignManagement\NegativeKeyword;
use Microsoft\BingAds\V12\CampaignManagement\NegativeKeywordList;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\MatchType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V12\AuthHelper;
use Microsoft\BingAds\Samples\V12\CampaignManagementExampleHelper;

$GLOBALS['AuthorizationData'] = null;
$GLOBALS['Proxy'] = null;
$GLOBALS['CampaignManagementProxy'] = null; 

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

try
{
    // Authenticate for Bing Ads services with a Microsoft Account.
    
    AuthHelper::Authenticate();

    $GLOBALS['CampaignManagementProxy'] = new ServiceClient(
        ServiceClientType::CampaignManagementVersion12, 
        $GLOBALS['AuthorizationData'], 
        AuthHelper::GetApiEnvironment());

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
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);
    }

    // You may choose to associate an exclusive set of negative keywords to an individual campaign 
    // or ad group. An exclusive set of negative keywords cannot be shared with other campaigns 
    // or ad groups. This sample only associates negative keywords with a campaign.

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->MatchType = MatchType::Phrase;
    $negativeKeyword->Text = "auto";
             
    $entityNegativeKeyword = new EntityNegativeKeyword();
    $entityNegativeKeyword->EntityId = $nillableCampaignIds->long[0];
    $entityNegativeKeyword->EntityType = "Campaign";
    $entityNegativeKeyword->NegativeKeywords = array($negativeKeyword);

    print "Add an exclusive set of negative keywords to the Campaign.\n\n";
    $addNegativeKeywordsToEntitiesResponse = CampaignManagementExampleHelper::AddNegativeKeywordsToEntities(array($entityNegativeKeyword));
    CampaignManagementExampleHelper::OutputArrayOfIdCollection($addNegativeKeywordsToEntitiesResponse->NegativeKeywordIds->IdCollection);
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors);

    print "Retrieve the exclusive set of negative keywords for the Campaign.\n\n";
    $getNegativeKeywordsByEntityIdsResponse = CampaignManagementExampleHelper::GetNegativeKeywordsByEntityIds(
        $nillableCampaignIds, 
        "Campaign", 
        $GLOBALS['AuthorizationData']->AccountId);
    CampaignManagementExampleHelper::OutputArrayOfEntityNegativeKeyword($getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getNegativeKeywordsByEntityIdsResponse->PartialErrors);
           
    // If you attempt to delete a negative keyword without an identifier the operation will
    // succeed but will return partial errors corresponding to the index of the negative keyword
    // that was not deleted. 
    $nestedPartialErrors = CampaignManagementExampleHelper::DeleteNegativeKeywordsFromEntities(
        array($entityNegativeKeyword))->NestedPartialErrors;
    print "Attempt to DeleteNegativeKeywordsFromEntities without NegativeKeyword identifier partially fails by design.\n\n";
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($nestedPartialErrors);

    // Delete the negative keywords with identifiers that were returned above.
    print "Deleted an exclusive set of negative keywords from the Campaign.\n\n";
    $nestedPartialErrors = CampaignManagementExampleHelper::DeleteNegativeKeywordsFromEntities(
        $getNegativeKeywordsByEntityIdsResponse->EntityNegativeKeywords->EntityNegativeKeyword);
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($nestedPartialErrors);

    // Negative keywords can also be added and deleted from a shared negative keyword list. 
    // The negative keyword list can be shared or associated with multiple campaigns.
    // NegativeKeywordList inherits from SharedList which inherits from SharedEntity.

    $negativeKeywordList = new NegativeKeywordList();
    $negativeKeywordList->Name = "My Negative Keyword List" . $_SERVER['REQUEST_TIME'];
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar(
        $negativeKeywordList, SOAP_ENC_OBJECT, 
        'NegativeKeywordList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, 
        SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    // You can create a new list for negative keywords with or without negative keywords.
       
    $addSharedEntityResponse = CampaignManagementExampleHelper::AddSharedEntity($encodedNegativeKeywordList, $negativeKeywords);
    $sharedEntityId = $addSharedEntityResponse->SharedEntityId;
    $listItemIds = $addSharedEntityResponse->ListItemIds;

    printf("NegativeKeywordList successfully added to account library and assigned identifer %d\n\n", $sharedEntityId);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addSharedEntityResponse->PartialErrors);

    print "Negative keywords currently in NegativeKeywordList:\n";
    $negativeKeywordList->Id = $sharedEntityId;
    $encodedNegativeKeywordList = new SoapVar(
        $negativeKeywordList, 
        SOAP_ENC_OBJECT, 
        'NegativeKeywordList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $negativeKeywords = CampaignManagementExampleHelper::GetListItemsBySharedList($encodedNegativeKeywordList);
    CampaignManagementExampleHelper::OutputArrayOfNegativeKeyword($negativeKeywords);
        

    // To update the list of negative keywords, you must either add or remove from the list
    // using the respective AddListItemsToSharedList or DeleteListItemsFromSharedList operations.
    // To remove the negative keywords from the list pass the negative keyword identifers
    // and negative keyword list (SharedEntity) identifer.

    print "Delete most recently added negative keywords from negative keyword list.\n\n";
    $partialErrors = CampaignManagementExampleHelper::DeleteListItemsFromSharedList($listItemIds, $encodedNegativeKeywordList);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($partialErrors);
    
    $negativeKeywords = CampaignManagementExampleHelper::GetListItemsBySharedList($encodedNegativeKeywordList);
    print "Negative keywords currently in NegativeKeywordList:\n";
    CampaignManagementExampleHelper::OutputArrayOfNegativeKeyword($negativeKeywords);
           
    // Whether you created the list with or without negative keywords, more can be added 
    // using the AddListItemsToSharedList operation.

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, 
        SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "auto";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, 
        SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $negativeKeywords[] = $encodedNegativeKeyword;

    print "Calling AddListItemsToSharedList . . .\n";
    $addListItemsToSharedListResponse = CampaignManagementExampleHelper::AddListItemsToSharedList(
        $negativeKeywords,
        $encodedNegativeKeywordList);
    $listItemIds = $addListItemsToSharedListResponse->ListItemIds;

    $negativeKeywords = CampaignManagementExampleHelper::GetListItemsBySharedList($encodedNegativeKeywordList);
    print "Negative keywords currently in NegativeKeywordList:\n";
    CampaignManagementExampleHelper::OutputArrayOfNegativeKeyword($negativeKeywords);
    
    // You can update the name of the negative keyword list. 

    $negativeKeywordList->Name = "My Updated Negative Keyword List";
    $negativeKeywordList->Type = "NegativeKeywordList";
    $encodedNegativeKeywordList = new SoapVar(
        $negativeKeywordList, 
        SOAP_ENC_OBJECT, 
        'NegativeKeywordList', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());

    printf("Update Negative Keyword List Name to %s.\n\n", $negativeKeywordList->Name);
    $partialErrors = CampaignManagementExampleHelper::UpdateSharedEntities(array($encodedNegativeKeywordList));
    CampaignManagementExampleHelper::OutputArrayOfBatchError($partialErrors);

    // Get and print the negative keyword lists and return the list of identifiers.

    $sharedEntityType = "NegativeKeywordList";
    $sharedEntities = CampaignManagementExampleHelper::GetSharedEntitiesByAccountId($sharedEntityType)->SharedEntities;
    CampaignManagementExampleHelper::OutputArrayOfSharedEntity($sharedEntities);

    // Use the list of shared entity IDs in the call to GetSharedEntityAssociationsBySharedEntityIds below.
    $sharedEntityIds = array();
    if((count((array)$sharedEntities) != 0) && is_array($sharedEntities->SharedEntity))
    {
        for ($index = 0; $index < count($sharedEntities->SharedEntity); $index++)
        {
            if(!is_null($sharedEntities->SharedEntity[$index]->Id))
            {
                $sharedEntityIds[] = $sharedEntities->SharedEntity[$index]->Id;
            }
        }
    }
           
    // Negative keywords were added to the negative keyword list above. You can associate the 
    // shared list of negative keywords with a campaign with or without negative keywords. 
    // Shared negative keyword lists cannot be associated with an ad group. An ad group can only 
    // be assigned an exclusive set of negative keywords. 

    $associations = array();
    $association = new SharedEntityAssociation();
    $association->EntityId = $nillableCampaignIds->long[0];
    $association->EntityType = "Campaign";
    $association->SharedEntityId = $sharedEntityId;
    $association->SharedEntityType = "NegativeKeywordList";
    $associations[] = $association;

    printf("Associate CampaignId %d with Negative Keyword List Id %d.\n\n", $nillableCampaignIds->long[0], $sharedEntityId);
    $partialErrors = CampaignManagementExampleHelper::SetSharedEntityAssociations($associations);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($partialErrors);
       
    // Get and print the associations either by Campaign or NegativeKeywordList identifier.
    $getSharedEntityAssociationsByEntityIdsResponse = CampaignManagementExampleHelper::GetSharedEntityAssociationsByEntityIds(
        array($nillableCampaignIds->long[0]), 
        "Campaign", 
        "NegativeKeywordList");
    CampaignManagementExampleHelper::OutputArrayOfSharedEntityAssociation($getSharedEntityAssociationsByEntityIdsResponse->Associations);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getSharedEntityAssociationsByEntityIdsResponse->PartialErrors);
           
    $getSharedEntityAssociationsBySharedEntityIdsResponse = CampaignManagementExampleHelper::GetSharedEntityAssociationsBySharedEntityIds(
            "Campaign", 
            array($sharedEntityIds[count(array($sharedEntityIds))-1]), 
            "NegativeKeywordList");
    CampaignManagementExampleHelper::OutputArrayOfSharedEntityAssociation($getSharedEntityAssociationsBySharedEntityIdsResponse->Associations);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($getSharedEntityAssociationsBySharedEntityIdsResponse->PartialErrors);
    
    // Explicitly delete the association between the campaign and the negative keyword list.

    print "Delete NegativeKeywordList associations\n\n";
    $partialErrors = CampaignManagementExampleHelper::DeleteSharedEntityAssociations($associations);
    CampaignManagementExampleHelper::OutputArrayOfBatchError($partialErrors);
       
    // Delete the campaign and any remaining assocations. 

    CampaignManagementExampleHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds->long[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds->long[0]);

    // DeleteCampaigns does not delete the negative keyword list from the account's library. 
    // Call the DeleteSharedEntities operation to delete the shared entities.

    printf("Delete Negative Keyword List (SharedEntity) Id %d\n\n", $sharedEntityId);
    $partialErrors = CampaignManagementExampleHelper::DeleteSharedEntities(array($encodedNegativeKeywordList));
    CampaignManagementExampleHelper::OutputArrayOfBatchError($partialErrors);
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
        CampaignManagementExampleHelper::OutputAdApiFaultDetail($e->detail->AdApiFaultDetail);
        
    }
    elseif (isset($e->detail->ApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputApiFaultDetail($e->detail->ApiFaultDetail);
    }
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        CampaignManagementExampleHelper::OutputEditorialApiFaultDetail($e->detail->EditorialApiFaultDetail);
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
