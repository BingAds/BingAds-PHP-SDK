<?php

namespace Microsoft\BingAds\Samples\v11;

// For more information about installing and using the Bing Ads PHP SDK, 
// see https://go.microsoft.com/fwlink/?linkid=838593.

require_once "/../vendor/autoload.php";


use SoapVar;
use SoapFault;
use Exception;

// Specify the Microsoft\BingAds\v11\CampaignManagement classes that will be used.
use Microsoft\BingAds\v11\CampaignManagement\AddCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\DeleteCampaignsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AddAdGroupsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAdGroupsByCampaignIdRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAudiencesByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetCampaignCriterionsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetCampaignsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\AddAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\DeleteAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\GetAdGroupCriterionsByIdsRequest;
use Microsoft\BingAds\v11\CampaignManagement\UpdateAdGroupCriterionsRequest;
use Microsoft\BingAds\v11\CampaignManagement\CampaignType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterionType;
use Microsoft\BingAds\v11\CampaignManagement\AdGroupCriterion;
use Microsoft\BingAds\v11\CampaignManagement\CampaignCriterion;

final class CampaignManagementHelper {

    const AllCampaignTypes = 
        CampaignType::SearchAndContent . ' ' . 
        CampaignType::Shopping . ' ' . 
        CampaignType::DynamicSearchAds;

    const AllTargetCampaignCriterionTypes = 
        CampaignCriterionType::Age . ' ' . 
        CampaignCriterionType::DayTime . ' ' . 
        CampaignCriterionType::Device . ' ' . 
        CampaignCriterionType::Gender . ' ' . 
        CampaignCriterionType::Location . ' ' . 
        CampaignCriterionType::LocationIntent . ' ' . 
        CampaignCriterionType::Radius;

    const AllTargetAdGroupCriterionTypes = 
        AdGroupCriterionType::Age . ' ' . 
        AdGroupCriterionType::DayTime . ' ' . 
        AdGroupCriterionType::Device . ' ' . 
        AdGroupCriterionType::Gender . ' ' . 
        AdGroupCriterionType::Location . ' ' . 
        AdGroupCriterionType::LocationIntent . ' ' . 
        AdGroupCriterionType::Radius;

    static function AddCampaigns($accountId, $campaigns)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddCampaignsRequest();
        $request->AccountId = $accountId;
        $request->Campaigns = $campaigns;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddCampaigns($request);
    }

    static function GetCampaignsByIds($accountId, $campaignIds, $campaignType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetCampaignsByIdsRequest();
        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;
        $request->CampaignType = $campaignType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetCampaignsByIds($request);
    }
    
    static function DeleteCampaigns($accountId, $campaignIds)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteCampaignsRequest();
        $request->AccountId = $accountId;
        $request->CampaignIds = $campaignIds;
        
        $GLOBALS['CampaignProxy']->GetService()->DeleteCampaigns($request);
    }

    static function AddAdGroups($campaignId, $adGroups)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddAdGroupsRequest();
        $request->CampaignId = $campaignId;
        $request->AdGroups = $adGroups;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddAdGroups($request);
    }

    static function GetAdGroupsByCampaignId($campaignId)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAdGroupsByCampaignIdRequest();
        $request->CampaignId = $campaignId;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupsByCampaignId($request);
    }

    static function GetAudiencesByIds($audienceIds, $audienceType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAudiencesByIdsRequest();
        $request->AudienceIds = $audienceIds;
        $request->Type = $audienceType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAudiencesByIds($request);
    }

    static function AddAdGroupCriterions($adGroupCriterions, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new AddAdGroupCriterionsRequest();
        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->AddAdGroupCriterions($request);
    }

    static function DeleteAdGroupCriterions($adGroupId, $adGroupCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new DeleteAdGroupCriterionsRequest();
        $request->AdGroupId = $adGroupId;
        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->CriterionType = $criterionType;
        
        $GLOBALS['CampaignProxy']->GetService()->DeleteAdGroupCriterions($request);
    }

    static function GetAdGroupCriterionsByIds($adGroupId, $adGroupCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetAdGroupCriterionsByIdsRequest();
        $request->AdGroupId = $adGroupId;
        $request->AdGroupCriterionIds = $adGroupCriterionIds;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetAdGroupCriterionsByIds($request);
    }

    static function GetCampaignCriterionsByIds($campaignId, $campaignCriterionIds, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new GetCampaignCriterionsByIdsRequest();
        $request->CampaignId = $campaignId;
        $request->CampaignCriterionIds = $campaignCriterionIds;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->GetCampaignCriterionsByIds($request);
    }

    static function UpdateAdGroupCriterions($adGroupCriterions, $criterionType)
    {
        $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy']; 

        $request = new UpdateAdGroupCriterionsRequest();
        $request->AdGroupCriterions = $adGroupCriterions;
        $request->CriterionType = $criterionType;
        
        return $GLOBALS['CampaignProxy']->GetService()->UpdateAdGroupCriterions($request);
    }


    // Outputs the list of ids.

    static function OutputIds($ids)
    {
        if(count((array)$ids) == 0)
        {
            return;
        }

        foreach ($ids as $id)
        {
            if(!is_null($id)){
                printf("Id: %s\n", $id);
            }
            else{
                printf("Nil Id\n");
            }
            
        }
    }

    // Outputs a list of BatchError objects that represent partial errors while managing negative keywords.

    static function OutputPartialErrors($partialErrors)
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
    
    // Outputs the remarketing list.

    static function OutputRemarketingList($remarketingList)
    {
        if ($remarketingList != null)
        {
            // Output inherited properties of the Audience base class.
            CampaignManagementHelper::OutputAudience($remarketingList);

            // Output properties that are specific to the RemarketingList
            printf("TagId: %s\n\n", $remarketingList->TagId);
            CampaignManagementHelper::OutputRemarketingRule($remarketingList->Rule);       
        }
    }

    // Outputs the audience.

    static function OutputAudience($audience)
    {
        if ($audience != null)
        {
            printf("Description: %s\n", $audience->Description);
            if ($audience->ForwardCompatibilityMap != null)
            {
                foreach ($audience->ForwardCompatibilityMap as $pair)
                {
                    printf("\tKey: %s\n", $pair->Key);
                    printf("\tValue: %s\n", $pair->Value);
                }
            }
            printf("Id: %s\n", $audience->Id);
            printf("MembershipDuration: %s\n", $audience->MembershipDuration);
            printf("Name: %s\n", $audience->Name);
            printf("ParentId: %s\n", $audience->ParentId);
            printf("Scope: %s\n", $audience->Scope);
        }
    }

    static function OutputRemarketingRule($remarketingRule)
    {
        if ($remarketingRule != null)
        {
            printf("Type: %s\n", $remarketingRule->Type);
            
            if ($remarketingRule->Type === "CustomEvents")
            {
                printf("Action: %s\n", $remarketingRule->Action);
                printf("ActionOperator: %s\n", $remarketingRule->ActionOperator);
                printf("Category: %s\n", $remarketingRule->Category);
                printf("CategoryOperator: %s\n", $remarketingRule->CategoryOperator);
                printf("Label: %s\n", $remarketingRule->Label);
                printf("LabelOperator: %s\n", $remarketingRule->LabelOperator);
                printf("Value: %s\n", $remarketingRule->Value);
                printf("ValueOperator: %s\n", $remarketingRule->ValueOperator);
            }    		
            else if ($remarketingRule->Type === "PageVisitors")
            {
                if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                    print("RuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->RuleItemGroups);
                }
            }
            else if ($remarketingRule->Type === "PageVisitorsWhoDidNotVisitAnotherPage")
            {
                if(isset($remarketingRule->ExcludeRuleItemGroups->RuleItemGroup)){
                    print("ExcludeRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->ExcludeRuleItemGroups);
                }
                if(isset($remarketingRule->IncludeRuleItemGroups->RuleItemGroup)){
                    print("IncludeRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->IncludeRuleItemGroups);
                }
            }
            else if ($remarketingRule->Type === "PageVisitorsWhoVisitedAnotherPage")
            {
                if(isset($remarketingRule->AnotherRuleItemGroups->RuleItemGroup)){
                    print("AnotherRuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->AnotherRuleItemGroups);
                }
                if(isset($remarketingRule->RuleItemGroups->RuleItemGroup)){
                    print("RuleItemGroups: \n");
                    CampaignManagementHelper::OutputRuleItemGroups($remarketingRule->RuleItemGroups);
                }
            }
            else
            {
                printf("Unknown remarketing rule type: %s\n", $remarketingRule->Type);
            }
        }
    }

    // Outputs the list of rule item groups.

    static function OutputRuleItemGroups($ruleItemGroups)
    {
        if(count((array)$ruleItemGroups) == 0)
        {
            return;
        }

        foreach ($ruleItemGroups as $ruleItemGroup)
        {
            if(isset($ruleItemGroup->Items->RuleItem)){
                foreach($ruleItemGroup->Items->RuleItem as $ruleItem){
                    if ($ruleItem->Type === "StringRuleItem")
                    {
                        print("\tRuleItem: \n");
                        printf("\tOperand: %s\n", $ruleItem->Operand);
                        printf("\tOperator: %s\n", $ruleItem->Operator);
                        printf("\tValue: %s\n", $ruleItem->Value);
                    }
                    else
                    {
                        print("Unknown remarketing rule item type.\n");
                    }
                }
            }
        }
    }

    static function OutputCampaignCriterions($criterions)
    {
        
        if(count((array)$criterions) == 0)
        {
            return;
        }

        foreach ($criterions->CampaignCriterion as $criterion)
        {
            if (empty($criterion))
            {
                print("Criterion is null or invalid.");
            }
            else
            {
                if ($criterion->Type === "BiddableCampaignCriterion")
                {
                    CampaignManagementHelper::OutputBiddableCampaignCriterion($criterion);
                    print("\n");
                }
                else if ($criterion->Type === "NegativeCampaignCriterion")
                {
                    CampaignManagementHelper::OutputNegativeCampaignCriterion($criterion);
                    print("\n");                    
                }
                else
                {
                    print("Unknown ad group criterion type");
                }
            }
        }
    }

    static function OutputCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("CampaignCriterion Type: %s\n", $criterion->Type);
            printf("CampaignId: %s\n", $criterion->CampaignId);
            CampaignManagementHelper::OutputCriterion($criterion->Criterion);
            printf("Id: %s\n", $criterion->Id);
            printf("Status: %s\n", $criterion->Status);
        }
    }

    static function OutputBiddableCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            // Output inherited properties of the CampaignCriterion base class.
            CampaignManagementHelper::OutputCampaignCriterion($criterion);

            // Output properties that are specific to the BiddableCampaignCriterion
            CampaignManagementHelper::OutputCriterionBid($criterion->CriterionBid);
        }
    }

    static function OutputNegativeCampaignCriterion($criterion)
    {
        if ($criterion != null)
        {
            // Output inherited properties of the CampaignCriterion base class.
            CampaignManagementHelper::OutputCampaignCriterion($criterion);

            // There aren't any properties that are specific to the NegativeCampaignCriterion
        }
    }

    static function OutputAdGroupCriterions($criterions)
    {
        if(count((array)$criterions) == 0)
        {
            return;
        }

        foreach ($criterions->AdGroupCriterion as $criterion)
        {
            if (empty($criterion))
            {
                print("Criterion is null or invalid.");
            }
            else
            {
                if ($criterion->Type === "BiddableAdGroupCriterion")
                {
                    CampaignManagementHelper::OutputBiddableAdGroupCriterion($criterion);
                    print("\n");
                }
                else if ($criterion->Type === "NegativeAdGroupCriterion")
                {
                    CampaignManagementHelper::OutputNegativeAdGroupCriterion($criterion);
                    print("\n");                    
                }
                else
                {
                    print("Unknown ad group criterion type");
                }
            }
        }
    }

    static function OutputAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("AdGroupCriterion Type: %s\n", $criterion->Type);
            printf("AdGroupId: %s\n", $criterion->AdGroupId);
            CampaignManagementHelper::OutputCriterion($criterion->Criterion);
            printf("Id: %s\n", $criterion->Id);
            printf("Status: %s\n", $criterion->Status);
        }
    }

    static function OutputBiddableAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            // Output inherited properties of the AdGroupCriterion base class.
            CampaignManagementHelper::OutputAdGroupCriterion($criterion);

            // Output properties that are specific to the BiddableAdGroupCriterion
            CampaignManagementHelper::OutputCriterionBid($criterion->CriterionBid);
                    
            printf("DestinationUrl: %s\n", $criterion->DestinationUrl);
            printf("EditorialStatus: %s\n", $criterion->EditorialStatus);
            print("FinalMobileUrls: \n");
            if ($criterion->FinalMobileUrls != null)
            {
                foreach ($criterion->FinalMobileUrls as $finalMobileUrl)
                {
                    print("\t" . $finalMobileUrl . "\n");
                }
            }
            print("FinalUrls: \n");
            if ($criterion->FinalUrls != null)
            {
                foreach ($criterion->FinalUrls as $finalUrl)
                {
                    print("\t" . $finalUrl . "\n");
                }
            }
            print("TrackingUrlTemplate: " . $criterion->TrackingUrlTemplate . "\n");
            print("UrlCustomParameters: \n");
            if ($criterion->UrlCustomParameters != null && $criterion->UrlCustomParameters->Parameters != null)
            {
                foreach ($criterion->UrlCustomParameters->Parameters as $customParameter)
                {
                    print("\tKey: " . $customParameter->Key . "\n");
                    print("\tValue: " . $customParameter->Value . "\n");
                }
            }
        }
    }

    static function OutputNegativeAdGroupCriterion($criterion)
    {
        if ($criterion != null)
        {
            // Output inherited properties of the AdGroupCriterion base class.
            CampaignManagementHelper::OutputAdGroupCriterion($criterion);

            // There aren't any properties that are specific to the NegativeAdGroupCriterion
        }
    }

    static function OutputCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("Type: %s\n", $criterion->Type);
            if ($criterion->Type === "ProductPartition")
            {
                CampaignManagementHelper::OutputProductPartition($criterion);
            }
            else if ($criterion->Type === "ProductScope")
            {
                CampaignManagementHelper::OutputProductScope($criterion);
            }
            else if ($criterion->Type === "Webpage")
            {
                CampaignManagementHelper::OutputWebpage($criterion);
            }
            else if ($criterion->Type === "AudienceCriterion")
            {
                CampaignManagementHelper::OutputAudienceCriterion($criterion);
            }
            else if ($criterion->Type === "AgeCriterion")
            {
                CampaignManagementHelper::OutputAgeCriterion($criterion);
            }
            else if ($criterion->Type === "DayTimeCriterion")
            {
                CampaignManagementHelper::OutputDayTimeCriterion($criterion);
            }
            else if ($criterion->Type === "DeviceCriterion")
            {
                CampaignManagementHelper::OutputDeviceCriterion($criterion);
            }
            else if ($criterion->Type === "GenderCriterion")
            {
                CampaignManagementHelper::OutputGenderCriterion($criterion);
            }
            else if ($criterion->Type === "LocationCriterion")
            {
                CampaignManagementHelper::OutputLocationCriterion($criterion);
            }
            else if ($criterion->Type === "LocationIntentCriterion")
            {
                CampaignManagementHelper::OutputLocationIntentCriterion($criterion);
            }
            else if ($criterion->Type === "RadiusCriterion")
            {
                CampaignManagementHelper::OutputRadiusCriterion($criterion);
            }
        }
    }

    static function OutputCriterionBid($criterionBid)
    {
        if ($criterionBid != null)
        {
            if ($criterionBid->Type === "FixedBid")
            {
                CampaignManagementHelper::OutputFixedBid($criterionBid);
            }
            else if ($criterionBid->Type === "BidMultiplier")
            {
                CampaignManagementHelper::OutputBidMultiplier($criterionBid);
            }
        }
    }

    static function OutputFixedBid($criterionBid)
    {
        if ($criterionBid != null)
        {
            printf("Fixed Bid Amount: %s\n", $criterionBid->Amount);
        }
    }

    static function OutputBidMultiplier($criterionBid)
    {
        if ($criterionBid != null)
        {
            printf("Bid Multiplier: %s\n", $criterionBid->Multiplier);
        }
    }

    static function OutputProductPartition($criterion)
    {
        if ($criterion != null)
        {
            printf("ParentCriterionId: %s\n", $criterion->ParentCriterionId);
            printf("PartitionType: %s\n", $criterion->PartitionType);
            if(isset($criterion->Condition))
            {
                print("Condition:\n");
                printf("Operand: %s\n", $criterion->Condition->Operand);
                printf("Attribute: %s\n", $criterion->Condition->Attribute);
            }
        }
    }

    static function OutputProductScope($criterion)
    {
        if ($criterion != null and isset($criterion->Conditions))
        {
            print("Product Conditions:\n");
            foreach ($criterion->Conditions->ProductCondition as $productCondition)
            {
                printf("Operand: %s\n", $productCondition->Operand);
                printf("Attribute: %s\n", $productCondition->Attribute);
            }
        }
    }

    static function OutputWebpage($criterion)
    {
        if ($criterion != null and isset($criterion->Parameter->Conditions))
        {
            printf("Webpage CriterionName: %s\n", $criterion->Parameter->CriterionName);

            print("Webpage Conditions:\n");
            foreach ($criterion->Parameter->Conditions->WebpageCondition as $webpageCondition)
            {
                printf("Operand: %s\n", $webpageCondition->Operand);
                printf("Attribute: %s\n", $webpageCondition->Attribute);
            }
        }
    }

    static function OutputAudienceCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("AudienceId: %s\n", $criterion->AudienceId);
            printf("AudienceType: %s\n", $criterion->AudienceType);
        }
    }

    static function OutputAgeCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("AgeRange: %s\n", $criterion->AgeRange);
        }
    }

    static function OutputDayTimeCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("Day: %s\n", $criterion->Day);
            printf("FromHour: %s\n", $criterion->FromHour);
            printf("FromMinute: %s\n", $criterion->FromMinute);
            printf("ToHour: %s\n", $criterion->ToHour);
            printf("ToMinute: %s\n", $criterion->ToMinute);
        }
    }

    static function OutputDeviceCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("DeviceName: %s\n", $criterion->DeviceName);
        }
    }

    static function OutputGenderCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("GenderType: %s\n", $criterion->GenderType);
        }
    }

    static function OutputLocationCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("DisplayName: %s\n", $criterion->DisplayName);
            printf("LocationId: %s\n", $criterion->LocationId);
            printf("LocationType: %s\n", $criterion->LocationType);
        }
    }

    static function OutputLocationIntentCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("IntentOption: %s\n", $criterion->IntentOption);
        }
    }

    static function OutputRadiusCriterion($criterion)
    {
        if ($criterion != null)
        {
            printf("LatitudeDegrees: %s\n", $criterion->LatitudeDegrees);
            printf("LongitudeDegrees: %s\n", $criterion->LongitudeDegrees);
            printf("Name: %s\n", $criterion->Name);
            printf("Radius: %s\n", $criterion->Radius);
            printf("RadiusUnit: %s\n", $criterion->RadiusUnit);
        }
    }
}

?>