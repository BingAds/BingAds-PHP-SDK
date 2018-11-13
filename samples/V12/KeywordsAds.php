<?php

namespace Microsoft\BingAds\Samples\V12;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once __DIR__ . "/../vendor/autoload.php";

include __DIR__ . "/AuthHelper.php";
include __DIR__ . "/CampaignManagementExampleHelper.php";

use SoapVar;
use SoapFault;
use Exception;

//Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Budget;
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\CampaignType;
use Microsoft\BingAds\V12\CampaignManagement\IdCollection;
use Microsoft\BingAds\V12\CampaignManagement\AdGroup;
use Microsoft\BingAds\V12\CampaignManagement\Keyword;
use Microsoft\BingAds\V12\CampaignManagement\Ad;
use Microsoft\BingAds\V12\CampaignManagement\AdType;
use Microsoft\BingAds\V12\CampaignManagement\AdAdditionalField;
use Microsoft\BingAds\V12\CampaignManagement\CampaignAdditionalField;
use Microsoft\BingAds\V12\CampaignManagement\ExpandedTextAd;
use Microsoft\BingAds\V12\CampaignManagement\Bid;
use Microsoft\BingAds\V12\CampaignManagement\BiddingScheme;
use Microsoft\BingAds\V12\CampaignManagement\MatchType;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\Date;
use Microsoft\BingAds\V12\CampaignManagement\CustomParameters;
use Microsoft\BingAds\V12\CampaignManagement\CustomParameter;
use Microsoft\BingAds\V12\CampaignManagement\EnhancedCpcBiddingScheme;
use Microsoft\BingAds\V12\CampaignManagement\InheritFromParentBiddingScheme;
use Microsoft\BingAds\V12\CampaignManagement\ManualCpcBiddingScheme;
use Microsoft\BingAds\V12\CampaignManagement\Setting;
use Microsoft\BingAds\V12\CampaignManagement\TargetSettingDetail;
use Microsoft\BingAds\V12\CampaignManagement\TargetSetting;
use Microsoft\BingAds\V12\CampaignManagement\CriterionTypeGroup;

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

    // Let's create a new budget and share it with a new campaign.

    $budgetIds = array();
    $budgets = array();
    $budget = new Budget();
    $budget->Amount = 50;
    $budget->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $budget->Name = "My Shared Budget " . $_SERVER['REQUEST_TIME'];
    
    $budgets[] = $budget;
    $budgetIds = CampaignManagementExampleHelper::AddBudgets($budgets)->BudgetIds;
                
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
        
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
    $adGroup->StartDate = null;
    $adGroup->EndDate = $endDate;
    $adGroup->CpcBid = new Bid();
    $adGroup->CpcBid->Amount = 0.07;
    $adGroup->Language = "English";
    
    // For ad groups you can use either of the InheritFromParentBiddingScheme or ManualCpcBiddingScheme objects. 
    // If you do not set this element, then InheritFromParentBiddingScheme is used by default.
    $biddingScheme = new ManualCpcBiddingScheme();
    $adGroup->BiddingScheme = new SoapVar(
        $biddingScheme, 
        SOAP_ENC_OBJECT, 
        'ManualCpcBiddingScheme', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    
    // Applicable for all audiences that are associated with this ad group. Set TargetAndBid to True 
    // if you want to show ads only to people included in the remarketing list, with the option to change
    // the bid amount. 
    $adGroupSettings = array();
    $adGroupTargetSetting = new TargetSetting();
    $adGroupAudienceTargetSettingDetail = new TargetSettingDetail();
    $adGroupAudienceTargetSettingDetail->CriterionTypeGroup = CriterionTypeGroup::Audience;
    $adGroupAudienceTargetSettingDetail->TargetAndBid = True;
    $adGroupTargetSetting->Details = array();
    $adGroupTargetSetting->Details[] = $adGroupAudienceTargetSettingDetail;
    $encodedAdGroupTargetSetting = new SoapVar(
        $adGroupTargetSetting, 
        SOAP_ENC_OBJECT, 
        'TargetSetting', 
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
    $adGroupSettings[] = $encodedAdGroupTargetSetting;
    $adGroup->Settings=$adGroupSettings;
    
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
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
        $GLOBALS['CampaignManagementProxy']->GetNamespace());
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

        // Set custom parameters that are specific to this ad.
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

        $ads[] = new SoapVar($expandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignManagementProxy']->GetNamespace());
    }

    $ads[1]->enc_value->TitlePart2 = "Quick & Easy Setup";
    $ads[2]->enc_value->TitlePart2 = "Fast & Simple Setup";
    $ads[3]->enc_value->TitlePart2 = "";
    $ads[4]->enc_value->TitlePart2 = "Quick & Easy Setup";

    // Add the campaign, ad group, keywords, and ads
    
    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementExampleHelper::AddCampaigns(
        $GLOBALS['AuthorizationData']->AccountId, 
        $campaigns,
        false);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addCampaignsResponse->PartialErrors);
    }

    print "AddAdGroups\n";
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups(
        $nillableCampaignIds->long[0], 
        $adGroups,
        null);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);
    }

    print "AddKeywords\n";
    $addKeywordsResponse = CampaignManagementExampleHelper::AddKeywords(
        $nillableAdGroupIds->long[0], 
        $keywords,
        null);
    $nillableKeywordIds = $addKeywordsResponse->KeywordIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableKeywordIds);
    if(isset($addKeywordsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addKeywordsResponse->PartialErrors);
    }

	print "AddAds\n";
    $addAdsResponse = CampaignManagementExampleHelper::AddAds($nillableAdGroupIds->long[0], $ads);
    $nillableAdIds = $addAdsResponse->AdIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdIds);
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdsResponse->PartialErrors);
    }
          
    
    // Here is a simple example that updates the campaign budget.
    // If the campaign has a shared budget you cannot update the Campaign budget amount,
    // and you must instead update the amount in the Budget object. If you try to update 
    // the budget amount of a campaign that has a shared budget, the service will return 
    // the CampaignServiceCannotUpdateSharedBudget error code.

    $getCampaigns = CampaignManagementExampleHelper::GetCampaignsByAccountId(
            $GLOBALS['AuthorizationData']->AccountId, 
            AuthHelper::CampaignTypes,
            CampaignAdditionalField::ExperimentId
        )->Campaigns;

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
        // The UpdateBudgets operation only accepts 100 Budget objects per call. 
        // To simply the example we will update the first 100.
        $getUniqueBudgetIds = array_unique($getBudgetIds, SORT_REGULAR);
        $top100BudgetIds = array_slice($getUniqueBudgetIds, 0, 100);
        $getBudgets = CampaignManagementExampleHelper::GetBudgetsByIds($top100BudgetIds)->Budgets;

        print("List of shared budgets BEFORE update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            CampaignManagementExampleHelper::OutputBudget($budget);
        }

        print("List of campaigns that share each budget:\n\n");
        $getCampaignIdCollection = CampaignManagementExampleHelper::GetCampaignIdsByBudgetIds($top100BudgetIds)->CampaignIdCollection;
        for($index = 0; $index < count($getCampaignIdCollection); $index++)
        {
            printf("BudgetId: %s\n", $top100BudgetIds[$index]);
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
        CampaignManagementExampleHelper::UpdateBudgets($updateBudgets);

        $getBudgets = CampaignManagementExampleHelper::GetBudgetsByIds($top100BudgetIds)->Budgets;

        print("List of shared budgets AFTER update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            CampaignManagementExampleHelper::OutputBudget($budget);
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
            CampaignManagementExampleHelper::OutputCampaign($campaign);

            $updateCampaign = new Campaign();
            $updateCampaign->Id = $campaign->Id;
                        
            // If the campaign has a shared budget, we can update other properties of the campaign, 
            // but cannot update the budget via Campaign object.
            if (isset($campaign->BudgetId) && $campaign->BudgetId > 0)
            {
                $updateCampaign->Name = $campaign->Name . $_SERVER['REQUEST_TIME'];
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
        
        CampaignManagementExampleHelper::UpdateCampaigns(
            $GLOBALS['AuthorizationData']->AccountId, 
            $updateCampaigns,
            false);

        $getCampaigns = CampaignManagementExampleHelper::GetCampaignsByIds(
            $GLOBALS['AuthorizationData']->AccountId, 
            $getCampaignIds, 
            AuthHelper::CampaignTypes,
            CampaignAdditionalField::ExperimentId
        )->Campaigns;

        print("List of campaigns AFTER update:\n");
        foreach ($getCampaigns->Campaign as $campaign)
        {
            print("Campaign:\n");
            CampaignManagementExampleHelper::OutputCampaign($campaign);
        }
    }
    
    
    // Update the Text for the 3 successfully created ads, and update some UrlCustomParameters.

    $updateAds = array();

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds->long[0];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // Set the UrlCustomParameters element to null or empty to retain any 
    // existing custom parameters.
    $updateExpandedTextAd->UrlCustomParameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignManagementProxy']->GetNamespace());

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds->long[1];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // To remove all custom parameters, set the Parameters element of the  
    // CustomParameters object to null or empty.
    $updateExpandedTextAd->UrlCustomParameters = new CustomParameters();
    $updateExpandedTextAd->UrlCustomParameters->Parameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignManagementProxy']->GetNamespace());
 
    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds->long[2];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // To remove a subset of custom parameters, specify the custom parameters that 
    // you want to keep in the Parameters element of the CustomParameters object.
    $updateExpandedTextAd->UrlCustomParameters = new CustomParameters();
    $updateExpandedTextAd->UrlCustomParameters->Parameters = array();
    $updateCustomParameter = new CustomParameter();
    $updateCustomParameter->Key = "promoCode";
    $updateCustomParameter->Value = "updatedpromo";
    $updateExpandedTextAd->UrlCustomParameters->Parameters[] = $updateCustomParameter;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignManagementProxy']->GetNamespace());

    // As an exercise you can view the results before and after update.

    $adTypes = array(AdType::AppInstall, AdType::DynamicSearch, AdType::ExpandedText, AdType::Product, AdType::Text);
    $adAdditionalFields = array(AdAdditionalField::TextPart2, AdAdditionalField::TitlePart3);
    $ads = CampaignManagementExampleHelper::GetAdsByAdGroupId(
        $nillableAdGroupIds->long[0], 
        $adTypes,
        $adAdditionalFields);

    if(isset($ads->Ads)){
        CampaignManagementExampleHelper::OutputArrayOfAd($ads->Ads);
    }    

    $updateAdsResponse = CampaignManagementExampleHelper::UpdateAds($nillableAdGroupIds->long[0], $updateAds);
    $ads = CampaignManagementExampleHelper::GetAdsByAdGroupId(
        $nillableAdGroupIds->long[0], 
        $adTypes,
        $adAdditionalFields);
    if(isset($ads->Ads)){
        CampaignManagementExampleHelper::OutputArrayOfAd($ads->Ads);
    }  

    // Here is a simple example that updates the keyword bid to use the ad group bid

    $updateKeywords = array();
    $updateKeyword = new Keyword();
    $updateKeyword->Id = $nillableKeywordIds->long[1];
    // Set Bid.Amount null (new empty Bid) to use the ad group bid.
    // If the Bid property is null, your keyword bid will not be updated.
    $updateKeyword->Bid = new Bid();
    $updateKeywords[] = $updateKeyword;

    // As an exercise you can view the results before and after update.

    $keywords = CampaignManagementExampleHelper::GetKeywordsByAdGroupId($nillableAdGroupIds->long[0], null);
    if(isset($keywords->Keywords)){
        CampaignManagementExampleHelper::OutputArrayOfKeyword($keywords->Keywords);
    }  

    $updateKeywordsResponse = CampaignManagementExampleHelper::UpdateKeywords(
        $nillableAdGroupIds->long[0], 
        $updateKeywords,
        null);
    $keywords = CampaignManagementExampleHelper::GetKeywordsByAdGroupId($nillableAdGroupIds->long[0], null);
    if(isset($keywords->Keywords)){
        CampaignManagementExampleHelper::OutputArrayOfKeyword($keywords->Keywords);
    }  
        
    // As an exercise you can delete the keyword
    CampaignManagementExampleHelper::DeleteKeywords($nillableAdGroupIds->long[0], array($nillableKeywordIds->long[1]));

    // Delete the campaign, budget, ad group, keyword, and ad that were previously added. 
    // You should remove these lines if you want to view the added entities in the 
    // Bing Ads web application or another tool.
    
    CampaignManagementExampleHelper::DeleteBudgets(array($budgetIds->long[0]));
    printf("Deleted BudgetId %d\n\n", $budgetIds->long[0]);

    CampaignManagementExampleHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds->long[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds->long[0]);
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
