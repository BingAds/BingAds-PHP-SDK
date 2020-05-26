<?php

namespace Microsoft\BingAds\Samples\V13;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\V13\CampaignManagement classes that will be used.
use Microsoft\BingAds\V13\CampaignManagement\Campaign;
use Microsoft\BingAds\V13\CampaignManagement\EntityNegativeKeyword;
use Microsoft\BingAds\V13\CampaignManagement\SharedEntityAssociation;
use Microsoft\BingAds\V13\CampaignManagement\SharedEntity;
use Microsoft\BingAds\V13\CampaignManagement\SharedList;
use Microsoft\BingAds\V13\CampaignManagement\SharedListItem;
use Microsoft\BingAds\V13\CampaignManagement\NegativeKeyword;
use Microsoft\BingAds\V13\CampaignManagement\NegativeKeywordList;
use Microsoft\BingAds\V13\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V13\CampaignManagement\MatchType;

// Specify the Microsoft\BingAds\Auth classes that will be used.
use Microsoft\BingAds\Auth\ServiceClient;
use Microsoft\BingAds\Auth\ServiceClientType;

// Specify the Microsoft\BingAds\Samples classes that will be used.
use Microsoft\BingAds\Samples\V13\AuthHelper;
use Microsoft\BingAds\Samples\V13\CampaignManagementExampleHelper;

try
{
    // Authenticate user credentials and set the account ID for the sample.  
    AuthHelper::Authenticate();

    // Add a campaign that will later be associated with negative keywords. 
    
    $campaigns = array();   
    $campaign = new Campaign();
    $campaign->Name = "Women's Shoes " . $_SERVER['REQUEST_TIME'];
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->Languages = array("All");
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaigns[] = $campaign;
    
    print("-----\r\nAddCampaigns:\r\n");
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns
    );
    $campaignIds = $addCampaignsResponse->CampaignIds;
    print("CampaignIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfLong($campaignIds);
    print("PartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);

    // You may choose to associate an exclusive set of negative keywords to an individual campaign 
    // or ad group. An exclusive set of negative keywords cannot be shared with other campaigns 
    // or ad groups. This sample only associates negative keywords with a campaign.

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->MatchType = MatchType::Phrase;
    $negativeKeyword->Text = "auto";
             
    $entityNegativeKeyword = new EntityNegativeKeyword();
    $entityNegativeKeyword->EntityId = $campaignIds->long[0];
    $entityNegativeKeyword->EntityType = "Campaign";
    $entityNegativeKeyword->NegativeKeywords = array($negativeKeyword);

    print("-----\r\nAddNegativeKeywordsToEntities:\r\n");
    $addNegativeKeywordsToEntitiesResponse = CampaignManagementExampleHelper::AddNegativeKeywordsToEntities(
        array($entityNegativeKeyword)
    );
    print "Added an exclusive set of negative keywords to the Campaign.\r\n";
    print("NegativeKeywordIds:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfIdCollection($addNegativeKeywordsToEntitiesResponse->NegativeKeywordIds);
    print("NestedPartialErrors:\r\n");
    CampaignManagementExampleHelper::OutputArrayOfBatchErrorCollection($addNegativeKeywordsToEntitiesResponse->NestedPartialErrors);
           
    // If you attempt to delete a negative keyword without an identifier the operation will return
    // partial errors corresponding to the index of the negative keyword that was not deleted. 

    print("-----\r\nDeleteNegativeKeywordsFromEntities:\r\n");
    $nestedPartialErrors = CampaignManagementExampleHelper::DeleteNegativeKeywordsFromEntities(
        array($entityNegativeKeyword)
    )->NestedPartialErrors;
    print "Attempt to DeleteNegativeKeywordsFromEntities without NegativeKeyword identifier partially fails by design.\r\n";
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );

    $negativeKeywords = array();
    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Exact;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $negativeKeywords[] = $encodedNegativeKeyword;

    $negativeKeyword = new NegativeKeyword();
    $negativeKeyword->Text = "car";
    $negativeKeyword->Type = "NegativeKeyword";
    $negativeKeyword->MatchType = MatchType::Phrase;
    $encodedNegativeKeyword = new SoapVar(
        $negativeKeyword, 
        SOAP_ENC_OBJECT, 
        'NegativeKeyword', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace()
    );
    $negativeKeywords[] = $encodedNegativeKeyword;

    // Add a negative keyword list that can be shared.
       
    print("-----\r\nAddSharedEntity:\r\n");
    $addSharedEntityResponse = CampaignManagementExampleHelper::AddSharedEntity(
        $encodedNegativeKeywordList, 
        $negativeKeywords,
        null
    );
    $sharedEntityId = $addSharedEntityResponse->SharedEntityId;
    $listItemIds = $addSharedEntityResponse->ListItemIds;
    printf("NegativeKeywordList added to account library and assigned identifer %s\r\n", $sharedEntityId);
           
    // Negative keywords were added to the negative keyword list above. You can associate the 
    // shared list of negative keywords with a campaign with or without negative keywords. 
    // Shared negative keyword lists cannot be associated with an ad group. An ad group can only 
    // be assigned an exclusive set of negative keywords. 

    $associations = array();
    $association = new SharedEntityAssociation();
    $association->EntityId = $campaignIds->long[0];
    $association->EntityType = "Campaign";
    $association->SharedEntityId = $sharedEntityId;
    $association->SharedEntityType = "NegativeKeywordList";
    $associations[] = $association;

    print("-----\r\nSetSharedEntityAssociations:\r\n");
    $partialErrors = CampaignManagementExampleHelper::SetSharedEntityAssociations(
        $associations,
        null
    );
    printf(
        "Associated CampaignId %s with Negative Keyword List Id %s.\r\n", 
        $campaignIds->long[0], $sharedEntityId
    );
           
    // Delete the campaign and everything it contains e.g., ad groups and ads.

    print("-----\r\nDeleteCampaigns:\r\n");
    CampaignManagementExampleHelper::DeleteCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        array($campaignIds->long[0])
    );
    printf("Deleted Campaign Id %s\r\n", $campaignIds->long[0]);

    // DeleteCampaigns does not delete the negative keyword list from the account's library. 
    // Call the DeleteSharedEntities operation to delete the shared entities.

    print("-----\r\nDeleteSharedEntities:\r\n");
    $partialErrors = CampaignManagementExampleHelper::DeleteSharedEntities(
        array($encodedNegativeKeywordList),
        null
    );
    printf("Deleted Negative Keyword List Id %s\r\n", $sharedEntityId);
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
