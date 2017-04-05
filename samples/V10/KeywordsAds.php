<?php

namespace Microsoft\BingAds\Samples\V10;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";

include "/../AuthHelper.php";

use SoapVar;
use SoapFault;
use Exception;

//Specify the Microsoft\BingAds\v10\CampaignManagement classes that will be used.
use Microsoft\BingAds\v10\CampaignManagement\AddBudgetsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetBudgetsByIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\GetCampaignIdsByBudgetIdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\UpdateBudgetsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteBudgetsRequest;
use Microsoft\BingAds\V10\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\V10\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\V10\CampaignManagement\GetCampaignsByAccountIdRequest;
use Microsoft\BingAds\V10\CampaignManagement\GetCampaignsByIdsRequest;
use Microsoft\BingAds\V10\CampaignManagement\UpdateCampaignsRequest;
use Microsoft\BingAds\V10\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\V10\CampaignManagement\AddKeywordsRequest;
use Microsoft\BingAds\v10\CampaignManagement\DeleteKeywordsRequest;
use Microsoft\BingAds\V10\CampaignManagement\GetKeywordsByAdGroupIdRequest;
use Microsoft\BingAds\V10\CampaignManagement\UpdateKeywordsRequest;
use Microsoft\BingAds\V10\CampaignManagement\AddAdsRequest;
use Microsoft\BingAds\V10\CampaignManagement\GetAdsByAdGroupIdRequest;
use Microsoft\BingAds\V10\CampaignManagement\UpdateAdsRequest;
use Microsoft\BingAds\v10\CampaignManagement\Budget;
use Microsoft\BingAds\V10\CampaignManagement\Campaign;
use Microsoft\BingAds\V10\CampaignManagement\CampaignType;
use Microsoft\BingAds\v10\CampaignManagement\CampaignAdditionalField;
use Microsoft\BingAds\v10\CampaignManagement\KeywordAdditionalField;
use Microsoft\BingAds\v10\CampaignManagement\IdCollection;
use Microsoft\BingAds\V10\CampaignManagement\AdGroup;
use Microsoft\BingAds\V10\CampaignManagement\Keyword;
use Microsoft\BingAds\V10\CampaignManagement\Ad;
use Microsoft\BingAds\V10\CampaignManagement\ExpandedTextAd;
use Microsoft\BingAds\V10\CampaignManagement\Bid;
use Microsoft\BingAds\V10\CampaignManagement\BiddingScheme;
use Microsoft\BingAds\V10\CampaignManagement\MatchType;
use Microsoft\BingAds\V10\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V10\CampaignManagement\AdDistribution;
use Microsoft\BingAds\V10\CampaignManagement\BiddingModel;
use Microsoft\BingAds\V10\CampaignManagement\PricingModel;
use Microsoft\BingAds\V10\CampaignManagement\Date;
use Microsoft\BingAds\V10\CampaignManagement\CustomParameters;
use Microsoft\BingAds\V10\CampaignManagement\CustomParameter;
use Microsoft\BingAds\v10\CampaignManagement\EnhancedCpcBiddingScheme;
use Microsoft\BingAds\v10\CampaignManagement\InheritFromParentBiddingScheme;
use Microsoft\BingAds\v10\CampaignManagement\ManualCpcBiddingScheme;

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

    // Let's create a new budget and share it with a new campaign.

    $budgetIds = array();
    $budgets = array();
    $budget = new Budget();
    $budget->Amount = 50;
    $budget->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $budget->Name = "My Shared Budget " . $_SERVER['REQUEST_TIME'];
    
    $budgets[] = $budget;
    $budgetIds = AddBudgets($budgets)->BudgetIds;
                
    // Specify one or more campaigns.
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    // You must choose to set either the shared  budget ID or daily amount.
    // You can set one or the other, but you may not set both.
    $campaign->BudgetId = count($budgetIds) > 0 ? $budgetIds->long[0] : null;
    $campaign->DailyBudget = count($budgetIds) > 0 ? 0 : 50;
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";
    $campaign->DaylightSaving = true;
    
    // You can set your campaign bid strategy to Enhanced CPC (EnhancedCpcBiddingScheme) 
    // and then, at any time, set an individual ad group or keyword bid strategy to 
    // Manual CPC (ManualCpcBiddingScheme).
    // For campaigns you can use either of the EnhancedCpcBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then ManualCpcBiddingScheme is used by default.
    $biddingScheme = new EnhancedCpcBiddingScheme();
    $campaign->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'EnhancedCpcBiddingScheme', 
        "http://schemas.datacontract.org/2004/07/Microsoft.AdCenter.Advertiser.CampaignManagement.Api.DataContracts.V10"
        );
        
    // Used with FinalUrls shown in the ads that we will add below.
    $campaign->TrackingUrlTemplate = 
       "http://tracker.example.com/?season={_season}&promocode={_promocode}&u={lpurl}";

    $campaigns[] = $campaign;
    
    // Specify one or more ad groups.

    $adGroups = array();

    date_default_timezone_set('UTC');
    $endDate = new Date();
    $endDate->Day = 31;
    $endDate->Month = 12;
    $endDate->Year = date("Y");

    $adGroup = new AdGroup();
    $adGroup->Name = "Women's Heated Ski Glove Sale";
    $adGroup->AdDistribution = AdDistribution::Search;
    $adGroup->BiddingModel = BiddingModel::Keyword;
    $adGroup->PricingModel = PricingModel::Cpc;
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->SearchBid = new Bid();
    $adGroup->SearchBid->Amount = 0.07;
    $adGroup->Language = "English";
    
    // For ad groups you can use either of the InheritFromParentBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then InheritFromParentBiddingScheme is used by default.
    $biddingScheme = new ManualCpcBiddingScheme();
    $adGroup->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'ManualCpcBiddingScheme', 
        "http://schemas.datacontract.org/2004/07/Microsoft.AdCenter.Advertiser.CampaignManagement.Api.DataContracts.V10"
        );
    
    // You could use a tracking template which would override the campaign level
    // tracking template. Tracking templates defined for lower level entities 
    // override those set for higher level entities.
    // In this example we are using the campaign level tracking template.
    $adGroup->TrackingUrlTemplate = null;
    
    $adGroups[] = $adGroup;

    // In this example only the second keyword should succeed. The Text of the first keyword exceeds the limit,
    // and the third keyword is a duplicate of the second keyword. 

    $keywords = array();

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Broad;
    $keyword->Text = "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves " .
                     "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves " .
                     "Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves Brand-A Gloves";
    // For keywords you can use either of the InheritFromParentBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then InheritFromParentBiddingScheme is used by default.
    $biddingScheme = new InheritFromParentBiddingScheme();
    $keyword->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'InheritFromParentBiddingScheme', 
        "http://schemas.datacontract.org/2004/07/Microsoft.AdCenter.Advertiser.CampaignManagement.Api.DataContracts.V10"
        );
    $keywords[] = $keyword;

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Phrase;
    $keyword->Text = "Brand-A Gloves";
    // For keywords you can use either of the InheritFromParentBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then InheritFromParentBiddingScheme is used by default.
    $biddingScheme = new InheritFromParentBiddingScheme();
    $keyword->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'InheritFromParentBiddingScheme', 
        "http://schemas.datacontract.org/2004/07/Microsoft.AdCenter.Advertiser.CampaignManagement.Api.DataContracts.V10"
        );
    $keywords[] = $keyword;

    $keyword = new Keyword();
    $keyword->Bid = new Bid();
    $keyword->Bid->Amount = 0.47;
    $keyword->Param2 = "10% Off";
    $keyword->MatchType = MatchType::Phrase;
    $keyword->Text = "Brand-A Gloves";
    // For keywords you can use either of the InheritFromParentBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then InheritFromParentBiddingScheme is used by default.
    $biddingScheme = new InheritFromParentBiddingScheme();
    $keyword->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'InheritFromParentBiddingScheme', 
        "http://schemas.datacontract.org/2004/07/Microsoft.AdCenter.Advertiser.CampaignManagement.Api.DataContracts.V10"
        );
    $keywords[] = $keyword;

    // In this example only the first 3 ads should succeed. 
    // The TitlePart2 of the fourth ad is empty and not valid,
    // and the fifth ad is a duplicate of the second ad. 

    $ads = array();

    for ($index = 0; $index < 5; $index++)
    {
        $expandedTextAd = new ExpandedTextAd();
        $expandedTextAd->TitlePart1 = "Contoso";
        $expandedTextAd->TitlePart2 = "Fast & Easy Setup";
        $expandedTextAd->Text = "Find New Customers & Increase Sales! Start Advertising on Contoso Today.";
        $expandedTextAd->Path1 = "seattle";
        $expandedTextAd->Path2 = "shoe sale";

        // With FinalUrls you can separate the tracking template, custom parameters, and 
        // landing page URLs. 

        $expandedTextAd->FinalUrls = array();
        $expandedTextAd->FinalUrls[] = "http://www.contoso.com/womenshoesale";

        // Final Mobile URLs can also be used if you want to direct the user to a different page 
        // for mobile devices.
        $expandedTextAd->FinalMobileUrls = array();
        $expandedTextAd->FinalMobileUrls[] = "http://mobile.contoso.com/womenshoesale";
 
        // You could use a tracking template which would override the campaign level
        // tracking template. Tracking templates defined for lower level entities 
        // override those set for higher level entities.
        // In this example we are using the campaign level tracking template.
        $expandedTextAd->TrackingUrlTemplate = null;

        // Set custom parameters that are specific to this ad, 
        // and can be used by the ad, ad group, campaign, or account level tracking template. 
        // In this example we are using the campaign level tracking template.
        $expandedTextAd->UrlCustomParameters = new CustomParameters();
        $expandedTextAd->UrlCustomParameters->Parameters = array();
        $customParameter1 = new CustomParameter();
        $customParameter1->Key = "promoCode";
        $customParameter1->Value = "PROMO" . ($index+1);
        $expandedTextAd->UrlCustomParameters->Parameters[] = $customParameter1;
        $customParameter2 = new CustomParameter();
        $customParameter2->Key = "season";
        $customParameter2->Value = "summer";
        $expandedTextAd->UrlCustomParameters->Parameters[] = $customParameter2;   

        $ads[] = new SoapVar($expandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());
    }

    $ads[1]->enc_value->TitlePart2 = "Quick & Easy Setup";
    $ads[2]->enc_value->TitlePart2 = "Fast & Simple Setup";
    $ads[3]->enc_value->TitlePart2 = "";
    $ads[4]->enc_value->TitlePart2 = "Quick & Easy Setup";

    // Add the campaign, ad group, keywords, and ads
    
    $addCampaignsResponse = AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $campaignIds = $addCampaignsResponse->CampaignIds->long;
    $campaignErrors = $addCampaignsResponse->PartialErrors;
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        $campaignErrors = $addCampaignsResponse->PartialErrors->BatchError;
    }
    OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $campaignErrors);
    
    $addAdGroupsResponse = AddAdGroups($campaignIds[0], $adGroups);
    $adGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    $adGroupErrors = $addAdGroupsResponse->PartialErrors;
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        $adGroupErrors = $addAdGroupsResponse->PartialErrors->BatchError;
    }
    OutputAdGroupsWithPartialErrors($adGroups, $adGroupIds, $adGroupErrors);    

    $addKeywordsResponse = AddKeywords($adGroupIds[0], $keywords);
    $keywordIds = $addKeywordsResponse->KeywordIds->long;
    $keywordErrors = $addKeywordsResponse->PartialErrors;
    if(isset($addKeywordsResponse->PartialErrors->BatchError)){
        $keywordErrors = $addKeywordsResponse->PartialErrors->BatchError;
    }
    OutputKeywordsWithPartialErrors($keywords, $keywordIds, $keywordErrors);

    $addAdsResponse = AddAds($adGroupIds[0], $ads);
    $adIds = $addAdsResponse->AdIds->long;
    $adErrors = $addAdsResponse->PartialErrors;
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        $adErrors = $addAdsResponse->PartialErrors->BatchError;
    }
    OutputAdsWithPartialErrors($ads, $adIds, $adErrors);
            
    
    // Here is a simple example that updates the campaign budget.
    // If the campaign has a shared budget you cannot update the Campaign budget amount,
    // and you must instead update the amount in the Budget object. If you try to update 
    // the budget amount of a campaign that has a shared budget, the service will return 
    // the CampaignServiceCannotUpdateSharedBudget error code.

    $campaignType = array(CampaignType::SearchAndContent, CampaignType::Shopping);
    $campaignAdditionalFields = array(CampaignAdditionalField::BiddingScheme, CampaignAdditionalField::BudgetId);
    
    $getCampaigns = GetCampaignsByAccountId(
            $GLOBALS['AuthorizationData']->AccountId, 
            $campaignType, 
            $campaignAdditionalFields)->Campaigns;

    $updateCampaigns = array();
    $updateBudgets = array();
    $getCampaignIds = array();
    $getBudgetIds = array();

    // Increase existing budgets by 20%
    foreach ($getCampaigns->Campaign as $campaign)
    {
        // If the campaign has a shared budget, let's add the budget ID to the list we will update later.
        if (!empty($campaign) && isset($campaign->BudgetId) && $campaign->BudgetId > 0)
        {
            $getBudgetIds[] = $campaign->BudgetId;
        }
    }

    // Update shared budgets in Budget objects.
    if (!empty($getBudgetIds))
    {
        $getUniqueBudgetIds = array_unique($getBudgetIds, SORT_REGULAR);
        $getBudgets = GetBudgetsByIds($getUniqueBudgetIds)->Budgets;

        print("List of shared budgets BEFORE update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            OutputBudget($budget);
        }

        print("List of campaigns that share each budget:\n\n");
        $getCampaignIdCollection = GetCampaignIdsByBudgetIds($getUniqueBudgetIds)->CampaignIdCollection;
        for($index = 0; $index < count($getCampaignIdCollection); $index++)
        {
            printf("BudgetId: %s\n", $getUniqueBudgetIds[$index]);
            print("Campaign Ids:\n");
            if(!empty($getCampaignIdCollection->IdCollection[$index]))
            {
                foreach ($getCampaignIdCollection->IdCollection[$index]->Ids->long as $id)
                {
                    printf("\t%s\n", $id);
                }
            }
            print("\n");
        }

        foreach ($getBudgets->Budget as $budget)
        {
            if (!empty($budget))
            {
                // Increase budget by 20 %
                $budget->Amount *= 1.2;
                $updateBudgets[] = $budget;
            }
        }
        UpdateBudgets($updateBudgets);

        $getBudgets = GetBudgetsByIds($getUniqueBudgetIds)->Budgets;

        print("List of shared budgets AFTER update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            OutputBudget($budget);
        }
    }

    // Update unshared budgets in Campaign objects.
    if(!empty($getCampaigns))
    {
        print("List of 100 campaigns BEFORE update:\n");
        // The UpdateCampaigns operation only accepts 100 Campaign objects per call. 
        // To simply the example we will update the first 100.
        $index=0;
        while($index < 100 && $index < count($getCampaigns))
        {
            $campaign = $getCampaigns->Campaign[$index];
            print("Campaign:\n");
            OutputCampaign($campaign);

            $updateCampaign = new Campaign();
            $updateCampaign->Id = $campaign->Id;
                        
            // If the campaign has a shared budget, we can update other properties of the campaign, 
            // but cannot update the budget via Campaign object.
            if (isset($campaign->BudgetId) && $campaign->BudgetId > 0)
            {
                $updateCampaign->Name = $campaign->Name . $_SERVER['REQUEST_TIME'];
            }        
            // Monthly budgets are deprecated and there will be a forced migration to daily budgets in calendar year 2017. 
            // Shared budgets do not support the monthly budget type, so this is only applicable to unshared budgets. 
            // During the migration all campaign level unshared budgets will be rationalized as daily. 
            // The formula that will be used to convert monthly to daily budgets is: Monthly budget amount / 30.4.
            // Moving campaign monthly budget to daily budget is encouraged before monthly budgets are migrated. 
            else if ($campaign->BudgetType == BudgetLimitType::MonthlyBudgetSpendUntilDepleted)
            {
                // Increase budget by 20 %
                $updateCampaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
                $updateCampaign->DailyBudget = ($campaign->MonthlyBudget / 30.4) * 1.2;
            }
            else
            {
                // Increase budget by 20 %
                $updateCampaign->BudgetType = $campaign->BudgetType;
                $updateCampaign->DailyBudget = $campaign->DailyBudget * 1.2;
            }
            
            $getCampaignIds[] = $updateCampaign->Id;
            $updateCampaigns[] = $updateCampaign;
            $index++;
        }
        
        UpdateCampaigns($GLOBALS['AuthorizationData']->AccountId, $updateCampaigns);

        $getCampaigns = GetCampaignsByIds(
            $GLOBALS['AuthorizationData']->AccountId, 
            $getCampaignIds, 
            $campaignType, 
            $campaignAdditionalFields)->Campaigns;

        print("List of campaigns AFTER update:\n");
        foreach ($getCampaigns->Campaign as $campaign)
        {
            print("Campaign:\n");
            OutputCampaign($campaign);
        }
    }
    
    
    // Update the Text for the 3 successfully created ads, and update some UrlCustomParameters.

    $updateAds = array();

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $adIds[0];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // Set the UrlCustomParameters element to null or empty to retain any 
    // existing custom parameters.
    $updateExpandedTextAd->UrlCustomParameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $adIds[1];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // To remove all custom parameters, set the Parameters element of the  
    // CustomParameters object to null or empty.
    $updateExpandedTextAd->UrlCustomParameters = new CustomParameters();
    $updateExpandedTextAd->UrlCustomParameters->Parameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());
 
    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $adIds[2];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // To remove a subset of custom parameters, specify the custom parameters that 
    // you want to keep in the Parameters element of the CustomParameters object.
    $updateExpandedTextAd->UrlCustomParameters = new CustomParameters();
    $updateExpandedTextAd->UrlCustomParameters->Parameters = array();
    $updateCustomParameter = new CustomParameter();
    $updateCustomParameter->Key = "promoCode";
    $updateCustomParameter->Value = "updatedpromo";
    $updateExpandedTextAd->UrlCustomParameters->Parameters[] = $updateCustomParameter;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());

    // As an exercise you can view the results before and after update.

    $ads = GetAdsByAdGroupId($adGroupIds[0]);
    var_dump($ads);
    $updateAdsResponse = UpdateAds($adGroupIds[0], $updateAds);
    $ads = GetAdsByAdGroupId($adGroupIds[0]);
    var_dump($ads);

    // Here is a simple example that updates the keyword bid to use the ad group bid

    $updateKeywords = array();
    $updateKeyword = new Keyword();
    $updateKeyword->Id = $keywordIds[1];
    // Set Bid.Amount null (new empty Bid) to use the ad group bid.
    // If the Bid property is null, your keyword bid will not be updated.
    $updateKeyword->Bid = new Bid();
    $updateKeywords[] = $updateKeyword;

    // As an exercise you can view the results before and after update.

    $keywordAdditionalFields = KeywordAdditionalField::BiddingScheme;
    $keywords = GetKeywordsByAdGroupId($adGroupIds[0], $keywordAdditionalFields);
    var_dump($keywords);
    $updateKeywordsResponse = UpdateKeywords($adGroupIds[0], $updateKeywords);
    $keywords = GetKeywordsByAdGroupId($adGroupIds[0], $keywordAdditionalFields);
    var_dump($keywords);
    
    // As an exercise you can delete the keyword
    DeleteKeywords($adGroupIds[0], array($keywordIds[1]));

    // Delete the campaign, budget, ad group, keyword, and ad that were previously added. 
    // You should remove these lines if you want to view the added entities in the 
    // Bing Ads web application or another tool.
    
    DeleteBudgets(array($budgetIds->long[0]));
    printf("Deleted BudgetId %d\n\n", $budgetIds->long[0]);

    DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($campaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $campaignIds[0]);
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
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
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
                    case 106:   // UserIsNotAuthorized
                        break;
                    case 1102:  // CampaignServiceInvalidAccountId
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

// Adds one or more budgets that can be shared by campaigns in the account.

function AddBudgets($budgets)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new AddBudgetsRequest();
    $request->Budgets = $budgets;

    return $GLOBALS['Proxy']->GetService()->AddBudgets($request);
}

// Gets the specified budgets from the account's shared budget library.

function GetBudgetsByIds($budgetIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetBudgetsByIdsRequest();
    $request->BudgetIds = $budgetIds;
    
    return $GLOBALS['Proxy']->GetService()->GetBudgetsByIds($request);
}

// Gets the identifiers of campaigns that share each specified budget.

function GetCampaignIdsByBudgetIds($budgetIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetCampaignIdsByBudgetIdsRequest();
    $request->BudgetIds = $budgetIds;
    
    return $GLOBALS['Proxy']->GetService()->GetCampaignIdsByBudgetIds($request);
}

// Updates one or more budgets that can be shared by campaigns in the account.

function UpdateBudgets($budgets)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new UpdateBudgetsRequest();
    $request->Budgets = $budgets;
    
    return $GLOBALS['Proxy']->GetService()->UpdateBudgets($request);
}

// Deletes one or more budgets.

function DeleteBudgets($budgetIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new DeleteBudgetsRequest();
    $request->BudgetIds = $budgetIds;
    
    return $GLOBALS['Proxy']->GetService()->DeleteBudgets($request);
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
    
    $GLOBALS['Proxy']->GetService()->DeleteCampaigns($request);
}

// Retrieves all the requested campaign types in the account.

function GetCampaignsByAccountId($accountId, $campaignType, $returnAdditionalFields)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetCampaignsByAccountIdRequest();
    $request->AccountId = $accountId;
    $request->CampaignType = $campaignType;
    $request->ReturnAdditionalFields = $returnAdditionalFields;
    
    return $GLOBALS['Proxy']->GetService()->GetCampaignsByAccountId($request);
}

// Gets one or more campaigns for the specified campaign identifiers.

function GetCampaignsByIds($accountId, $campaignIds, $campaignType, $returnAdditionalFields)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetCampaignsByIdsRequest();
    $request->AccountId = $accountId;
    $request->CampaignIds = $campaignIds;
    $request->CampaignType = $campaignType;
    $request->ReturnAdditionalFields = $returnAdditionalFields;
    
    return $GLOBALS['Proxy']->GetService()->GetCampaignsByIds($request);
}

// Updates one or more campaigns.

function UpdateCampaigns($accountId, $campaigns)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new UpdateCampaignsRequest();
    $request->AccountId = $accountId;
    $request->Campaigns = $campaigns;
    
    return $GLOBALS['Proxy']->GetService()->UpdateCampaigns($request);
}

// Adds one or more ad groups to the specified campaign.

function AddAdGroups($campaignId, $adGroups)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new AddAdGroupsRequest();
    $request->CampaignId = $campaignId;
    $request->AdGroups = $adGroups;
    
    return $GLOBALS['Proxy']->GetService()->AddAdGroups($request);
}

// Adds one or more keywords to the specified ad group.

function AddKeywords($adGroupId, $keywords)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new AddKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Keywords = $keywords;
    
    return $GLOBALS['Proxy']->GetService()->AddKeywords($request);
}

// Deletes one or more keywords in the specified ad group.

function DeleteKeywords($adGroupId, $keywordIds)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new DeleteKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->KeywordIds = $keywordIds;
    
    return $GLOBALS['Proxy']->GetService()->DeleteKeywords($request);
}

// Gets the keywords in the specified ad group.

function GetKeywordsByAdGroupId($adGroupId, $returnAdditionalFields)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetKeywordsByAdGroupIdRequest();
    $request->AdGroupId = $adGroupId;
    $request->ReturnAdditionalFields = $returnAdditionalFields;
    
    return $GLOBALS['Proxy']->GetService()->GetKeywordsByAdGroupId($request);
}

// Updates one or more keywords in the specified ad group.

function UpdateKeywords($adGroupId, $keywords)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new UpdateKeywordsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Keywords = $keywords;
    
    return $GLOBALS['Proxy']->GetService()->UpdateKeywords($request);
}

// Adds one or more ads to the specified ad group.

function AddAds($adGroupId, $ads)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new AddAdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Ads = $ads;
    
    return $GLOBALS['Proxy']->GetService()->AddAds($request);
}

// Gets the ads in the specified ad group.

function GetAdsByAdGroupId($adGroupId)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetAdsByAdGroupIdRequest();
    $request->AdGroupId = $adGroupId;
    
    return $GLOBALS['Proxy']->GetService()->GetAdsByAdGroupId($request);
}

// Updates one or more ads in the specified ad group.

function UpdateAds($adGroupId, $ads)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new UpdateAdsRequest();
    $request->AdGroupId = $adGroupId;
    $request->Ads = $ads;
    
    return $GLOBALS['Proxy']->GetService()->UpdateAds($request);
}

function OutputBudget($budget)
{
    if (!empty($budget))
    {
        printf("Amount: %s\n", $budget->Amount);
        printf("AssociationCount: %s\n", $budget->AssociationCount);
        printf("BudgetType: %s\n", $budget->BudgetType);
        printf("Id: %s\n", $budget->Id);
        printf("Name: %s\n\n", $budget->Name);
    }
}

function OutputCampaign($campaign)
{
    if (!empty($campaign))
    {
        OutputBiddingScheme($campaign->BiddingScheme);
        printf("BudgetId: %s\n", isset($campaign->BudgetId) ? $campaign->BudgetId : "");
        printf("BudgetType: %s\n", $campaign->BudgetType);
        printf("CampaignType: %s\n", $campaign->CampaignType);
        printf("DailyBudget: %s\n", $campaign->DailyBudget);
        printf("Description: %s\n", $campaign->Description);
        print("ForwardCompatibilityMap: ");
        if (isset($campaign->ForwardCompatibilityMap) && isset($campaign->ForwardCompatibilityMap->KeyValuePairOfstringstring))
        {
            foreach ($campaign->ForwardCompatibilityMap->KeyValuePairOfstringstring as $pair)
            {
                printf("Key: %s\n", $pair->Key);
                printf("Value: %s\n", $pair->Value);
            }
        }
        printf("Id: %s\n", $campaign->Id);
        printf("MonthlyBudget: %s\n", $campaign->MonthlyBudget);
        printf("Name: %s\n", $campaign->Name);
        print("Settings:\n");
        if (isset($campaign->Settings))
        {
            foreach ($campaign->Settings->Setting as $setting)
            {
                if ($setting->Type == "Shopping")
                {
                    print("ShoppingSetting:\n");
                    printf("Priority: %s\n", $setting->Priority);
                    printf("SalesCountryCode: %s\n", $setting->SalesCountryCode);
                    printf("StoreId: %s\n", $setting->StoreId);
                }
            }
        }
        printf("Status: %s\n", $campaign->Status);
        printf("TrackingUrlTemplate: %s\n", $campaign->TrackingUrlTemplate);
        print("UrlCustomParameters:\n");
        if (isset($campaign->UrlCustomParameters) && isset($campaign->UrlCustomParameters->Parameters))
        {
            foreach ($campaign->UrlCustomParameters->Parameters->CustomParameter as $customParameter)
            {
                printf("\tKey: %s\n", $customParameter->Key);
                printf("\tValue: %s\n", $customParameter->Value);
            }
        }
        printf("TimeZone: %s\n\n", $campaign->TimeZone);
    }
}

function OutputBiddingScheme($biddingScheme)
{
    if (!empty($biddingScheme) && isset($biddingScheme->Type))
    {
        printf("BiddingScheme Type: %s\n", $biddingScheme->Type);
    }
}

// Outputs the campaign identifiers, as well as any partial errors.

function OutputCampaignsWithPartialErrors($campaigns, $campaignIds, $partialErrors)
{
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

// Outputs the ad group identifiers, as well as any partial errors.

function OutputAdGroupsWithPartialErrors($adGroups, $adGroupIds, $partialErrors)
{
    // Output the identifier of each successfully added ad group.

    for ($index = 0; $index < count($adGroups); $index++ )
    {
        // The array of ad group identifiers equals the size of the attempted ad group. If the element 
        // is not empty, the ad group at that index was added successfully and has an ad group identifer. 

        if (!empty($adGroupIds[$index]))
        {
            printf("AdGroup[%d] (Name:%s) successfully added and assigned AdGroupId %s\n", 
                $index, 
                $adGroups[$index]->Name, 
                $adGroupIds[$index] );
        }
    }

    // Output the error details for any ad group not successfully added.
    // Note also that multiple error reasons may exist for the same attempted ad group.

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddAdGroups.

        printf("\nAdGroup[%d] (Name:%s) not added due to the following error:\n", $error->Index, $adGroups[$error->Index]->Name);

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


// Outputs the keyword identifiers, as well as any partial errors.

function OutputKeywordsWithPartialErrors($keywords, $keywordIds, $partialErrors)
{
    // Output the identifier of each successfully added keyword.

    for ($index = 0; $index < count($keywords); $index++ )
    {
        // The array of keyword identifiers equals the size of the attempted keywords. If the element 
        // is not empty, the keyword at that index was added successfully and has a keyword identifer. 

        if (!empty($keywordIds[$index]))
        {
            printf("Keyword[%d] (Text:%s) successfully added and assigned KeywordId %s\n", 
                $index, 
                $keywords[$index]->Text, 
                $keywordIds[$index] );
        }
    }

    // Output the error details for any keyword not successfully added.
    // Note also that multiple error reasons may exist for the same attempted keyword. 

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddKeywords.

        printf("\nKeyword[%d] (Text:%s) not added due to the following error:\n", $error->Index, $keywords[$error->Index]->Text);

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


// Outputs the ad identifiers, as well as any partial errors.

function OutputAdsWithPartialErrors($ads, $adIds, $partialErrors)
{
    $attributeValues = array();

    // Output the identifier of each successfully added ad.

    for ($index = 0; $index < count($ads); $index++ )
    {
        // Determine the type of ad. Prepare the corresponding attribute value to be printed,
        // both for successful new ads and partial errors. 

        if($ads[$index]->enc_stype === "ExpandedTextAd")
        {
            $attributeValues[] = "TitlePart1 - TitlePart2:" . $ads[$index]->enc_value->TitlePart1 . ' - ' . $ads[$index]->enc_value->TitlePart2;
        }
        else if($ads[$index]->enc_stype === "ProductAd")
        {
            $attributeValues[] = "PromotionalText:" . $ads[$index]->enc_value->PromotionalText;
        }
        else if($ads[$index]->enc_stype === "TextAd")
        {
            $attributeValues[] = "Title:" . $ads[$index]->enc_value->Title;
        }
        else
        {
            $attributeValues[] = "Unknown Ad Type";
        }

        // The array of ad identifiers equals the size of the attempted ads. If the element 
        // is not empty, the ad at that index was added successfully and has an ad identifer. 

        if (!empty($adIds[$index]))
        {
            printf("Ad[%d] (%s) successfully added and assigned AdId %s\n", 
                $index, 
                $attributeValues[$index], 
                $adIds[$index] );

            print("FinalMobileUrls: \n");
            foreach ($ads[$index]->enc_value->FinalMobileUrls as $finalMobileUrl)
            {
                print("\t" . $finalMobileUrl . "\n");
            }
            print("FinalUrls: \n");
            foreach ($ads[$index]->enc_value->FinalUrls as $finalUrl)
            {
                print("\t" . $finalUrl . "\n");
            }
            print("TrackingUrlTemplate: " . $ads[$index]->enc_value->TrackingUrlTemplate . "\n");
            print("UrlCustomParameters: \n");
            if ($ads[$index]->enc_value->UrlCustomParameters != null && $ads[$index]->enc_value->UrlCustomParameters->Parameters != null)
            {
                foreach ($ads[$index]->enc_value->UrlCustomParameters->Parameters as $customParameter)
                {
                    print("\tKey: " . $customParameter->Key . "\n");
                    print("\tValue: " . $customParameter->Value . "\n");
                }
            }
            print "\n";
        }
    }


    // Output the error details for any ad not successfully added.
    // Note also that multiple error reasons may exist for the same attempted ad. 

    foreach ($partialErrors as $error)
    {
        // The index of the partial errors is equal to the index of the list
        // specified in the call to AddAds.

        printf("\nAd[%d] (%s) not added due to the following error:\n", $error->Index, $attributeValues[$error->Index]);

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

?>