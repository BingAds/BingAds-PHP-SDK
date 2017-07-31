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

//Specify the Microsoft\BingAds\V11\CampaignManagement classes that will be used.
use Microsoft\BingAds\V11\CampaignManagement\Budget;
use Microsoft\BingAds\V11\CampaignManagement\Campaign;
use Microsoft\BingAds\V11\CampaignManagement\CampaignType;
use Microsoft\BingAds\V11\CampaignManagement\CampaignAdditionalField;
use Microsoft\BingAds\V11\CampaignManagement\KeywordAdditionalField;
use Microsoft\BingAds\V11\CampaignManagement\IdCollection;
use Microsoft\BingAds\V11\CampaignManagement\AdGroup;
use Microsoft\BingAds\V11\CampaignManagement\Keyword;
use Microsoft\BingAds\V11\CampaignManagement\Ad;
use Microsoft\BingAds\V11\CampaignManagement\AdType;
use Microsoft\BingAds\V11\CampaignManagement\ExpandedTextAd;
use Microsoft\BingAds\V11\CampaignManagement\Bid;
use Microsoft\BingAds\V11\CampaignManagement\BiddingScheme;
use Microsoft\BingAds\V11\CampaignManagement\MatchType;
use Microsoft\BingAds\V11\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V11\CampaignManagement\AdDistribution;
use Microsoft\BingAds\V11\CampaignManagement\Date;
use Microsoft\BingAds\V11\CampaignManagement\CustomParameters;
use Microsoft\BingAds\V11\CampaignManagement\CustomParameter;
use Microsoft\BingAds\V11\CampaignManagement\EnhancedCpcBiddingScheme;
use Microsoft\BingAds\V11\CampaignManagement\InheritFromParentBiddingScheme;
use Microsoft\BingAds\V11\CampaignManagement\ManualCpcBiddingScheme;

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

    // Let's create a new budget and share it with a new campaign.

    $budgetIds = array();
    $budgets = array();
    $budget = new Budget();
    $budget->Amount = 50;
    $budget->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $budget->Name = "My Shared Budget " . $_SERVER['REQUEST_TIME'];
    
    $budgets[] = $budget;
    $budgetIds = CampaignManagementHelper::AddBudgets($budgets)->BudgetIds;
                
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
        $GLOBALS['CampaignProxy']->GetNamespace()
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
        $GLOBALS['CampaignProxy']->GetNamespace()
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
        $GLOBALS['CampaignProxy']->GetNamespace()
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
        $GLOBALS['CampaignProxy']->GetNamespace()
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
        $GLOBALS['CampaignProxy']->GetNamespace()
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
    
    print "AddCampaigns\n";
    $addCampaignsResponse = CampaignManagementHelper::AddCampaigns($GLOBALS['AuthorizationData']->AccountId, $campaigns);
    $nillableCampaignIds = $addCampaignsResponse->CampaignIds->long;
    CampaignManagementHelper::OutputIds($nillableCampaignIds);
    if(isset($addCampaignsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addCampaignsResponse->PartialErrors->BatchError);
    }

    print "AddAdGroups\n";
    $addAdGroupsResponse = CampaignManagementHelper::AddAdGroups($nillableCampaignIds[0], $adGroups);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds->long;
    CampaignManagementHelper::OutputIds($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addAdGroupsResponse->PartialErrors->BatchError);
    }

    print "AddKeywords\n";
    $addKeywordsResponse = CampaignManagementHelper::AddKeywords($nillableAdGroupIds[0], $keywords);
    $nillableKeywordIds = $addKeywordsResponse->KeywordIds->long;
    CampaignManagementHelper::OutputIds($nillableKeywordIds);
    if(isset($addKeywordsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addKeywordsResponse->PartialErrors->BatchError);
    }

	print "AddAds\n";
    $addAdsResponse = CampaignManagementHelper::AddAds($nillableAdGroupIds[0], $ads);
    $nillableAdIds = $addAdsResponse->AdIds->long;
    CampaignManagementHelper::OutputIds($nillableAdIds);
    if(isset($addAdsResponse->PartialErrors->BatchError)){
        CampaignManagementHelper::OutputPartialErrors($addAdsResponse->PartialErrors->BatchError);
    }

            
    
    // Here is a simple example that updates the campaign budget.
    // If the campaign has a shared budget you cannot update the Campaign budget amount,
    // and you must instead update the amount in the Budget object. If you try to update 
    // the budget amount of a campaign that has a shared budget, the service will return 
    // the CampaignServiceCannotUpdateSharedBudget error code.

    $getCampaigns = CampaignManagementHelper::GetCampaignsByAccountId(
            $GLOBALS['AuthorizationData']->AccountId, 
            CampaignManagementHelper::AllCampaignTypes)->Campaigns;

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
        $getBudgets = CampaignManagementHelper::GetBudgetsByIds($top100BudgetIds)->Budgets;

        print("List of shared budgets BEFORE update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            CampaignManagementHelper::OutputBudget($budget);
        }

        print("List of campaigns that share each budget:\n\n");
        $getCampaignIdCollection = CampaignManagementHelper::GetCampaignIdsByBudgetIds($top100BudgetIds)->CampaignIdCollection;
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
        CampaignManagementHelper::UpdateBudgets($updateBudgets);

        $getBudgets = CampaignManagementHelper::GetBudgetsByIds($top100BudgetIds)->Budgets;

        print("List of shared budgets AFTER update:\n\n");
        foreach ($getBudgets->Budget as $budget)
        {
            print("Budget:\n");
            CampaignManagementHelper::OutputBudget($budget);
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
            CampaignManagementHelper::OutputCampaign($campaign);

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
        
        CampaignManagementHelper::UpdateCampaigns($GLOBALS['AuthorizationData']->AccountId, $updateCampaigns);

        $getCampaigns = CampaignManagementHelper::GetCampaignsByIds(
            $GLOBALS['AuthorizationData']->AccountId, 
            $getCampaignIds, 
            CampaignManagementHelper::AllCampaignTypes)->Campaigns;

        print("List of campaigns AFTER update:\n");
        foreach ($getCampaigns->Campaign as $campaign)
        {
            print("Campaign:\n");
            CampaignManagementHelper::OutputCampaign($campaign);
        }
    }
    
    
    // Update the Text for the 3 successfully created ads, and update some UrlCustomParameters.

    $updateAds = array();

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds[0];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // Set the UrlCustomParameters element to null or empty to retain any 
    // existing custom parameters.
    $updateExpandedTextAd->UrlCustomParameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());

    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds[1];
    $updateExpandedTextAd->Text = "Huge Savings on All Red Shoes.";
    // To remove all custom parameters, set the Parameters element of the  
    // CustomParameters object to null or empty.
    $updateExpandedTextAd->UrlCustomParameters = new CustomParameters();
    $updateExpandedTextAd->UrlCustomParameters->Parameters = null;
    $updateAds[] = new SoapVar($updateExpandedTextAd, SOAP_ENC_OBJECT, 'ExpandedTextAd', $GLOBALS['CampaignProxy']->GetNamespace());
 
    $updateExpandedTextAd = new ExpandedTextAd();
    $updateExpandedTextAd->Id = $nillableAdIds[2];
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

    $adTypes = array(AdType::AppInstall, AdType::DynamicSearch, AdType::ExpandedText, AdType::Product, AdType::Text);
    $ads = CampaignManagementHelper::GetAdsByAdGroupId($nillableAdGroupIds[0], $adTypes);
    var_dump($ads);
    $updateAdsResponse = CampaignManagementHelper::UpdateAds($nillableAdGroupIds[0], $updateAds);
    $ads = CampaignManagementHelper::GetAdsByAdGroupId($nillableAdGroupIds[0], $adTypes);
    var_dump($ads);

    // Here is a simple example that updates the keyword bid to use the ad group bid

    $updateKeywords = array();
    $updateKeyword = new Keyword();
    $updateKeyword->Id = $nillableKeywordIds[1];
    // Set Bid.Amount null (new empty Bid) to use the ad group bid.
    // If the Bid property is null, your keyword bid will not be updated.
    $updateKeyword->Bid = new Bid();
    $updateKeywords[] = $updateKeyword;

    // As an exercise you can view the results before and after update.

    $keywords = CampaignManagementHelper::GetKeywordsByAdGroupId($nillableAdGroupIds[0]);
    var_dump($keywords);
    $updateKeywordsResponse = CampaignManagementHelper::UpdateKeywords($nillableAdGroupIds[0], $updateKeywords);
    $keywords = CampaignManagementHelper::GetKeywordsByAdGroupId($nillableAdGroupIds[0]);
    var_dump($keywords);
    
    // As an exercise you can delete the keyword
    CampaignManagementHelper::DeleteKeywords($nillableAdGroupIds[0], array($nillableKeywordIds[1]));

    // Delete the campaign, budget, ad group, keyword, and ad that were previously added. 
    // You should remove these lines if you want to view the added entities in the 
    // Bing Ads web application or another tool.
    
    CampaignManagementHelper::DeleteBudgets(array($budgetIds->long[0]));
    printf("Deleted BudgetId %d\n\n", $budgetIds->long[0]);

    CampaignManagementHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds[0]));
    printf("Deleted CampaignId %d\n\n", $nillableCampaignIds[0]);
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

?>
