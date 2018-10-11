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

// Specify the Microsoft\BingAds\V12\CampaignManagement classes that will be used.
use Microsoft\BingAds\V12\CampaignManagement\Campaign;
use Microsoft\BingAds\V12\CampaignManagement\AdGroup;
use Microsoft\BingAds\V12\CampaignManagement\BiddableAdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\V12\CampaignManagement\AdGroupCriterionStatus;
use Microsoft\BingAds\V12\CampaignManagement\Audience;
use Microsoft\BingAds\V12\CampaignManagement\AudienceCriterion;
use Microsoft\BingAds\V12\CampaignManagement\BidMultiplier;
use Microsoft\BingAds\V12\CampaignManagement\AudienceType;
use Microsoft\BingAds\V12\CampaignManagement\RemarketingList;
use Microsoft\BingAds\V12\CampaignManagement\EntityScope;
use Microsoft\BingAds\V12\CampaignManagement\BudgetLimitType;
use Microsoft\BingAds\V12\CampaignManagement\Bid;
use Microsoft\BingAds\V12\CampaignManagement\Date;
use Microsoft\BingAds\V12\CampaignManagement\Setting;
use Microsoft\BingAds\V12\CampaignManagement\TargetSettingDetail;
use Microsoft\BingAds\V12\CampaignManagement\TargetSetting;
use Microsoft\BingAds\V12\CampaignManagement\CriterionTypeGroup;

// Specify the Microsoft\BingAds\V12\CustomerManagement classes that will be used.
use Microsoft\BingAds\V12\CustomerManagement\Account;
use Microsoft\BingAds\V12\CustomerManagement\User;

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

    // To discover all remarketing lists that the user can associate with ad groups 
    // in the current account (per CustomerAccountId header), 
    // set RemarketingListIds to null when calling the GetAudiencesByIds operation.

    $remarketingLists = CampaignManagementExampleHelper::GetAudiencesByIds(
        null, 
        array(AudienceType::RemarketingList))->Audiences;

    // You must already have at least one remarketing list for the remainder of this example. 

    if (count($remarketingLists) < 1)
    {
        return;
    }
                
    // Add an ad group in a campaign. The ad group will later be associated with remarketing lists. 
    
    $campaigns = array();
   
    $campaign = new Campaign();
    $campaign->Name = "Winter Clothing " . $_SERVER['REQUEST_TIME'];
    $campaign->Description = "Winter clothing line.";
    $campaign->BudgetType = BudgetLimitType::DailyBudgetStandard;
    $campaign->DailyBudget = 50.00;
    $campaign->TimeZone = "PacificTimeUSCanadaTijuana";

    $campaigns[] = $campaign;
    
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
    $addAdGroupsResponse = CampaignManagementExampleHelper::AddAdGroups($nillableCampaignIds->long[0], $adGroups);
    $nillableAdGroupIds = $addAdGroupsResponse->AdGroupIds;
    CampaignManagementExampleHelper::OutputArrayOfLong($nillableAdGroupIds);
    if(isset($addAdGroupsResponse->PartialErrors->BatchError)){
        CampaignManagementExampleHelper::OutputArrayOfBatchError($addAdGroupsResponse->PartialErrors);
    }

    // If the campaign or ad group add operations failed then we cannot continue this example. 

    if (empty($addAdGroupsResponse->AdGroupIds) || count($addAdGroupsResponse->AdGroupIds) < 1)
    {
        return;
    }

   $adGroupCriterions = array();

    // This example associates all of the remarketing lists with the new ad group.

    foreach ($remarketingLists->Audience as $remarketingList)
    {
        if ($remarketingList->Id != null)
        {
            $adGroupCriterion = new BiddableAdGroupCriterion();
            
            $criterion = new AudienceCriterion();
            $criterion->AudienceId = $remarketingList->Id;
            $criterion->AudienceType = AudienceType::RemarketingList;
            $adGroupCriterion->Criterion = new SoapVar(
                $criterion, 
                SOAP_ENC_OBJECT, 
                'AudienceCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());

            $criterionBid = new BidMultiplier();
            $criterionBid->Multiplier = 20.00;
            $adGroupCriterion->CriterionBid = new SoapVar(
                $criterionBid, 
                SOAP_ENC_OBJECT, 
                'BidMultiplier', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());

            $adGroupCriterion->AdGroupId = $nillableAdGroupIds->long[0];
            $adGroupCriterion->Status = AdGroupCriterionStatus::Active;
            
            $adGroupCriterions[] = new SoapVar(
                $adGroupCriterion, 
                SOAP_ENC_OBJECT, 
                'BiddableAdGroupCriterion', 
                $GLOBALS['CampaignManagementProxy']->GetNamespace());
        }
    }

    print("\nAssociate remarketing lists with the ad group.\n\n");
    $addAdGroupCriterionsResponse = CampaignManagementExampleHelper::AddAdGroupCriterions($adGroupCriterions, AdGroupCriterionType::Audience);
    
    // You can store the association IDs which can be used to update or delete associations later. 

    $adGroupCriterionIds = $addAdGroupCriterionsResponse->AdGroupCriterionIds->long;

    $getAdGroupCriterionsByIdsResponse = CampaignManagementExampleHelper::GetAdGroupCriterionsByIds(
        $adGroupCriterionIds,
        $nillableAdGroupIds->long[0],          
        AdGroupCriterionType::RemarketingList);
    
    print("Remarketing list associations for the ad group:\n\n");
    CampaignManagementExampleHelper::OutputArrayOfAdGroupCriterion($getAdGroupCriterionsByIdsResponse->AdGroupCriterions); 
    
    // If the associations were added and retrieved successfully let's practice updating and deleting one of them.

    if ($adGroupCriterionIds != null && count($adGroupCriterionIds) > 0)
    {
        $adGroupCriterions = array();
        
        $updateAdGroupCriterion = new BiddableAdGroupCriterion();

        $criterion = new AudienceCriterion();
        $criterion->AudienceType = AudienceType::RemarketingList;
        $updateAdGroupCriterion->Criterion = new SoapVar(
            $criterion, 
            SOAP_ENC_OBJECT, 
            'AudienceCriterion', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace());

        $criterionBid = new BidMultiplier();
        $criterionBid->Multiplier = 10.00;
        $updateAdGroupCriterion->CriterionBid = new SoapVar(
            $criterionBid, 
            SOAP_ENC_OBJECT, 
            'BidMultiplier', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace());

        $updateAdGroupCriterion->AdGroupId = $nillableAdGroupIds->long[0];
        $updateAdGroupCriterion->Id = $adGroupCriterionIds[0];
        $updateAdGroupCriterion->Status = AdGroupCriterionStatus::Active;
        
        $adGroupCriterions[] = new SoapVar(
            $updateAdGroupCriterion, 
            SOAP_ENC_OBJECT, 
            'BiddableAdGroupCriterion', 
            $GLOBALS['CampaignManagementProxy']->GetNamespace());
        
        $updateAdGroupCriterionsResponse = CampaignManagementExampleHelper::UpdateAdGroupCriterions(
            $adGroupCriterions, 
            AdGroupCriterionType::Audience);
        
        $deleteAdGroupCriterionsResponse = CampaignManagementExampleHelper::DeleteAdGroupCriterions(
            $adGroupCriterionIds, 
            $nillableAdGroupIds->long[0], 
            AdGroupCriterionType::Audience);
    }

    // Delete the campaign, ad group, and ad group remarketing list associations that were previously added. 
    // You should remove this line if you want to view the added entities in the 
    // Bing Ads web application or another tool.

    CampaignManagementExampleHelper::DeleteCampaigns($GLOBALS['AuthorizationData']->AccountId, array($nillableCampaignIds->long[0]));
    printf("\nDeleted CampaignId %d\n\n", $nillableCampaignIds->long[0]);
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
