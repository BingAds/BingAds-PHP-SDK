<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines the entities that may be downloaded and uploaded in bulk.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/downloadentity?view=bingads-13 DownloadEntity Value Set
     * 
     * @used-by DownloadCampaignsByAccountIdsRequest
     * @used-by DownloadCampaignsByCampaignIdsRequest
     */
    final class DownloadEntity
    {
        /** Include Campaign records in the download data. */
        const Campaigns = 'Campaigns';

        /** Include Ad Group records in the download data. */
        const AdGroups = 'AdGroups';

        /** Include App Install Ad, Dynamic Search Ad, Expanded Text Ad, Product Ad, Responsive Ad, Responsive Search Ad, and Text Ad records in the download data. */
        const Ads = 'Ads';

        /** Include Keyword records in the download data. */
        const Keywords = 'Keywords';

        /** Include Campaign Negative Keyword records in the download data. */
        const CampaignNegativeKeywords = 'CampaignNegativeKeywords';

        /** Include Ad Group Negative Keyword records in the download data. */
        const AdGroupNegativeKeywords = 'AdGroupNegativeKeywords';

        /** Include Campaign Age Criterion, Campaign Company Name Criterion, Campaign DayTime Criterion, Campaign DeviceOS Criterion, Campaign Gender Criterion, Campaign Industry Criterion, Campaign Job Function Criterion, Campaign Location Criterion, Campaign Location Intent Criterion, Campaign Negative Location Criterion, and Campaign Radius Criterion records in the download data. */
        const CampaignTargetCriterions = 'CampaignTargetCriterions';

        /** Include Ad Group Age Criterion, Ad Group Company Name Criterion, Ad Group DayTime Criterion, Ad Group DeviceOS Criterion, Ad Group Gender Criterion, Ad Group Industry Criterion, Ad Group Job Function Criterion, Ad Group Location Criterion, Ad Group Location Intent Criterion, Ad Group Negative Age Criterion, Ad Group Negative Company Name Criterion, Ad Group Negative Gender Criterion, Ad Group Negative Industry Criterion, Ad Group Negative Job Function Criterion, Ad Group Negative Location Criterion, and Ad Group Radius Criterion records in the download data. */
        const AdGroupTargetCriterions = 'AdGroupTargetCriterions';

        /** Include Campaign Negative Site records in the download data. */
        const CampaignNegativeSites = 'CampaignNegativeSites';

        /** Include Ad Group Negative Site records in the download data. */
        const AdGroupNegativeSites = 'AdGroupNegativeSites';

        /** Include Campaign Location Ad Extension records in the download that represents the association relationship between a campaign and a location ad extension. */
        const CampaignLocationAdExtensions = 'CampaignLocationAdExtensions';

        /** Include Campaign Call Ad Extension records in the download that represents the association relationship between a campaign and a call ad extension. */
        const CampaignCallAdExtensions = 'CampaignCallAdExtensions';

        /** Include Location Ad Extension records in the download data. */
        const LocationAdExtensions = 'LocationAdExtensions';

        /** Include Call Ad Extension records in the download data. */
        const CallAdExtensions = 'CallAdExtensions';

        /** Include Negative Keyword List records in the download data. */
        const NegativeKeywordLists = 'NegativeKeywordLists';

        /** Include Shared Negative Keyword records in the download data. */
        const SharedNegativeKeywords = 'SharedNegativeKeywords';

        /** Include Campaign Negative Keyword List Association records in the download that represents the association relationship between a campaign and a negative keyword list. */
        const CampaignNegativeKeywordListAssociations = 'CampaignNegativeKeywordListAssociations';

        /** Include Image Ad Extension records in the download data. */
        const ImageAdExtensions = 'ImageAdExtensions';

        /** Include Campaign Image Ad Extension records in the download that represents the association relationship between a campaign and an image ad extension. */
        const CampaignImageAdExtensions = 'CampaignImageAdExtensions';

        /** Include Ad Group Image Ad Extension records in the download that each represent the association relationship between an ad group and an image ad extension. */
        const AdGroupImageAdExtensions = 'AdGroupImageAdExtensions';

        /** Include App Ad Extension records in the download data. */
        const AppAdExtensions = 'AppAdExtensions';

        /** Include Ad Group App Ad Extension records in the download that each represent the association relationship between an ad group and an app ad extension. */
        const AdGroupAppAdExtensions = 'AdGroupAppAdExtensions';

        /** Include Campaign App Ad Extension records in the download that each represent the association relationship between a campaign and an app ad extension. */
        const CampaignAppAdExtensions = 'CampaignAppAdExtensions';

        /** Include Price Ad Extension records in the download data. */
        const PriceAdExtensions = 'PriceAdExtensions';

        /** Include Review Ad Extension records in the download data. */
        const ReviewAdExtensions = 'ReviewAdExtensions';

        /** Include Campaign Negative Dynamic Search Ad Target records in the download data. */
        const CampaignNegativeDynamicSearchAdTargets = 'CampaignNegativeDynamicSearchAdTargets';

        /** Include Ad Group Product Partition records in the download data. */
        const AdGroupProductPartitions = 'AdGroupProductPartitions';

        /** Include Campaign Product Scope records in the download data. */
        const CampaignProductScopes = 'CampaignProductScopes';

        /** Include Campaign Review Ad Extension records in the download that each represent the association relationship between a campaign and a review ad extension. */
        const CampaignReviewAdExtensions = 'CampaignReviewAdExtensions';

        /** Include Ad Group Review Ad Extension records in the download that each represent the association relationship between an ad group and a review ad extension. */
        const AdGroupReviewAdExtensions = 'AdGroupReviewAdExtensions';

        /** Include Callout Ad Extension records in the download data. */
        const CalloutAdExtensions = 'CalloutAdExtensions';

        /** Include Campaign Callout Ad Extension records in the download that represents the association relationship between a campaign and a callout ad extension. */
        const CampaignCalloutAdExtensions = 'CampaignCalloutAdExtensions';

        /** Include Ad Group Callout Ad Extension records in the download that each represent the association relationship between an ad group and a callout ad extension. */
        const AdGroupCalloutAdExtensions = 'AdGroupCalloutAdExtensions';

        /** Include Sitelink Ad Extension records in the download data. */
        const SitelinkAdExtensions = 'SitelinkAdExtensions';

        /** Include Campaign Sitelink Ad Extension records in the download that represents the association relationship between a campaign and a sitelink ad extension. */
        const CampaignSitelinkAdExtensions = 'CampaignSitelinkAdExtensions';

        /** Include Ad Group Sitelink Ad Extension records in the download that each represent the association relationship between an ad group and a sitelink ad extension. */
        const AdGroupSitelinkAdExtensions = 'AdGroupSitelinkAdExtensions';

        /** Include Structured Snippet Ad Extension records in the download data. */
        const StructuredSnippetAdExtensions = 'StructuredSnippetAdExtensions';

        /** Include Campaign Structured Snippet Ad Extension records in the download that represents the association relationship between a campaign and a structured snippet ad extension. */
        const CampaignStructuredSnippetAdExtensions = 'CampaignStructuredSnippetAdExtensions';

        /** Include Ad Group Structured Snippet Ad Extension records in the download that each represent the association relationship between an ad group and a structured snippet ad extension. */
        const AdGroupStructuredSnippetAdExtensions = 'AdGroupStructuredSnippetAdExtensions';

        /** Include Remarketing List records in the download data. */
        const RemarketingLists = 'RemarketingLists';

        /** Include Ad Group Remarketing List Association records in the download that each represent the association relationship between an ad group and a remarketing list. */
        const AdGroupRemarketingListAssociations = 'AdGroupRemarketingListAssociations';

        /** Include Budget records in the download data. */
        const Budgets = 'Budgets';

        /** Include Text Ad records in the download data. */
        const TextAds = 'TextAds';

        /** Include Product Ad records in the download data. */
        const ProductAds = 'ProductAds';

        /** Include App Install Ad records in the download data. */
        const AppInstallAds = 'AppInstallAds';

        /** Include Expanded Text Ad records in the download data. */
        const ExpandedTextAds = 'ExpandedTextAds';

        /** Include Dynamic Search Ad records in the download data. */
        const DynamicSearchAds = 'DynamicSearchAds';

        /** Include Ad Group Dynamic Search Ad Target records in the download data. */
        const AdGroupDynamicSearchAdTargets = 'AdGroupDynamicSearchAdTargets';

        /** Include Ad Group Negative Dynamic Search Ad Target records in the download data. */
        const AdGroupNegativeDynamicSearchAdTargets = 'AdGroupNegativeDynamicSearchAdTargets';

        /** Include Campaign Price Ad Extension records in the download that represents the association relationship between a campaign and a price ad extension. */
        const CampaignPriceAdExtensions = 'CampaignPriceAdExtensions';

        /** Include Ad Group Price Ad Extension records in the download that each represent the association relationship between an ad group and a price ad extension. */
        const AdGroupPriceAdExtensions = 'AdGroupPriceAdExtensions';

        /** Include Label records in the download data. */
        const Labels = 'Labels';

        /** Include Campaign Label records in the download that each represent a label applied to a campaign. */
        const CampaignLabels = 'CampaignLabels';

        /** Include Ad Group Label records in the download that each represent a label applied to an ad group. */
        const AdGroupLabels = 'AdGroupLabels';

        /** Include Text Ad Label records in the download that each represent a label applied to a text ad. */
        const TextAdLabels = 'TextAdLabels';

        /** Include Keyword Label records in the download that each represent a label applied to a keyword. */
        const KeywordLabels = 'KeywordLabels';

        /** Include Ad Group Negative Remarketing List Association records in the download that each represent the association relationship between an ad group and a remarketing list exclusion. */
        const AdGroupNegativeRemarketingListAssociations = 'AdGroupNegativeRemarketingListAssociations';

        /** Include Custom Audience records in the download data. */
        const CustomAudiences = 'CustomAudiences';

        /** Include Ad Group Custom Audience Association records in the download that each represent the association relationship between an ad group and a custom audience. */
        const AdGroupCustomAudienceAssociations = 'AdGroupCustomAudienceAssociations';

        /** Include Ad Group Negative Custom Audience Association records in the download that each represent the association relationship between an ad group and a custom audience exclusion. */
        const AdGroupNegativeCustomAudienceAssociations = 'AdGroupNegativeCustomAudienceAssociations';

        /** Include In Market Audience records in the download data. */
        const InMarketAudiences = 'InMarketAudiences';

        /** Include Ad Group In Market Audience Association records in the download that each represent the association relationship between an ad group and an in-market audience. */
        const AdGroupInMarketAudienceAssociations = 'AdGroupInMarketAudienceAssociations';

        /** Include Ad Group Negative In Market Audience Association records in the download that each represent the association relationship between an ad group and an in-market audience exclusion. */
        const AdGroupNegativeInMarketAudienceAssociations = 'AdGroupNegativeInMarketAudienceAssociations';

        /** Include Combined List, Custom Audience, Customer List, In Market Audience, Product Audience, Remarketing List, and Similar Remarketing List records in the download data. */
        const Audiences = 'Audiences';

        /** Include Ad Group Combined List Association, Ad Group Custom Audience Association, Ad Group Customer List Association, Ad Group In Market Audience Association, Ad Group Product Audience Association, Ad Group Remarketing List Association, and Ad Group Similar Remarketing List Association records in the download data. */
        const AdGroupAudienceAssociations = 'AdGroupAudienceAssociations';

        /** Include Ad Group Negative Combined List Association, Ad Group Negative Custom Audience Association, Ad Group Negative Customer List Association, Ad Group Negative In Market Audience Association, Ad Group Negative Product Audience Association, Ad Group Negative Remarketing List Association, and Ad Group Negative Similar Remarketing List Association records in the download data. */
        const AdGroupNegativeAudienceAssociations = 'AdGroupNegativeAudienceAssociations';

        /** Include Product Ad Label records in the download that each represent a label applied to a product ad. */
        const ProductAdLabels = 'ProductAdLabels';

        /** Include App Install Ad Label records in the download that each represent a label applied to an app install ad. */
        const AppInstallAdLabels = 'AppInstallAdLabels';

        /** Include Expanded Text Ad Label records in the download that each represent a label applied to an expanded text ad. */
        const ExpandedTextAdLabels = 'ExpandedTextAdLabels';

        /** Include Dynamic Search Ad Label records in the download that each represent a label applied to a dynamic search ad. */
        const DynamicSearchAdLabels = 'DynamicSearchAdLabels';

        /** Include Account Location Ad Extension records in the download that represents the association relationship between an account and a location ad extension. */
        const AccountLocationAdExtensions = 'AccountLocationAdExtensions';

        /** Include Account Image Ad Extension records in the download that represents the association relationship between an account and an image ad extension. */
        const AccountImageAdExtensions = 'AccountImageAdExtensions';

        /** Include Account App Ad Extension records in the download that each represent the association relationship between an account and an app ad extension. */
        const AccountAppAdExtensions = 'AccountAppAdExtensions';

        /** Include Account Price Ad Extension records in the download that represents the association relationship between an account and a price ad extension. */
        const AccountPriceAdExtensions = 'AccountPriceAdExtensions';

        /** Include Account Review Ad Extension records in the download that each represent the association relationship between an account and a review ad extension. */
        const AccountReviewAdExtensions = 'AccountReviewAdExtensions';

        /** Include Account Callout Ad Extension records in the download that represents the association relationship between an account and a callout ad extension. */
        const AccountCalloutAdExtensions = 'AccountCalloutAdExtensions';

        /** Include Account Sitelink Ad Extension records in the download that represents the association relationship between an account and a sitelink ad extension. */
        const AccountSitelinkAdExtensions = 'AccountSitelinkAdExtensions';

        /** Include Account Structured Snippet Ad Extension records in the download that represents the association relationship between an account and a structured snippet ad extension. */
        const AccountStructuredSnippetAdExtensions = 'AccountStructuredSnippetAdExtensions';

        /** Include Responsive Ad records in the download data. */
        const ResponsiveAds = 'ResponsiveAds';

        /** Include Responsive Ad Label records in the download that each represent a label applied to a responsive ad. */
        const ResponsiveAdLabels = 'ResponsiveAdLabels';

        /** Include Product Audience records in the download data. */
        const ProductAudiences = 'ProductAudiences';

        /** Include Ad Group Product Audience Association records in the download that each represent the association relationship between an ad group and a product audience. */
        const AdGroupProductAudienceAssociations = 'AdGroupProductAudienceAssociations';

        /** Include Ad Group Negative Product Audience Association records in the download that each represent the association relationship between an ad group and a product audience exclusion. */
        const AdGroupNegativeProductAudienceAssociations = 'AdGroupNegativeProductAudienceAssociations';

        /** Include Similar Remarketing List records in the download data. */
        const SimilarRemarketingLists = 'SimilarRemarketingLists';

        /** Include Ad Group Similar Remarketing List Association records in the download that each represent the association relationship between an ad group and a similar remarketing list. */
        const AdGroupSimilarRemarketingListAssociations = 'AdGroupSimilarRemarketingListAssociations';

        /** Include Ad Group Negative Similar Remarketing List Association records in the download that each represent the association relationship between an ad group and a similar remarketing list exclusion. */
        const AdGroupNegativeSimilarRemarketingListAssociations = 'AdGroupNegativeSimilarRemarketingListAssociations';

        /** Include Experiment records in the download data. */
        const Experiments = 'Experiments';

        /** Include Action Ad Extension records in the download data. */
        const ActionAdExtensions = 'ActionAdExtensions';

        /** Include Campaign Action Ad Extension records in the download that represents the association relationship between a campaign and an action ad extension. */
        const CampaignActionAdExtensions = 'CampaignActionAdExtensions';

        /** Include Ad Group Action Ad Extension records in the download that each represent the association relationship between an ad group and an action ad extension. */
        const AdGroupActionAdExtensions = 'AdGroupActionAdExtensions';

        /** Include Account Action Ad Extension records in the download that represents the association relationship between an account and an action ad extension. */
        const AccountActionAdExtensions = 'AccountActionAdExtensions';

        /** Include Responsive Search Ad records in the download data. */
        const ResponsiveSearchAds = 'ResponsiveSearchAds';

        /** Include Responsive Search Ad Label records in the download that each represent a label applied to a responsive search ad. */
        const ResponsiveSearchAdLabels = 'ResponsiveSearchAdLabels';

        /** Include Campaign Combined List Association, Campaign Custom Audience Association, Campaign Customer List Association, Campaign In Market Audience Association, Campaign Product Audience Association, Campaign Remarketing List Association, and Campaign Similar Remarketing List Association records in the download data. */
        const CampaignAudienceAssociations = 'CampaignAudienceAssociations';

        /** Include Campaign Negative Combined List Association, Campaign Negative Custom Audience Association, Campaign Negative Customer List Association, Campaign Negative In Market Audience Association, Campaign Negative Product Audience Association, Campaign Negative Remarketing List Association, and Campaign Negative Similar Remarketing List Association records in the download data. */
        const CampaignNegativeAudienceAssociations = 'CampaignNegativeAudienceAssociations';

        /** Include Campaign Custom Audience Association records in the download that each represent the association relationship between a campaign and a custom audience. */
        const CampaignCustomAudienceAssociations = 'CampaignCustomAudienceAssociations';

        /** Include Campaign Negative Custom Audience Association records in the download that each represent the association relationship between a campaign and a custom audience exclusion. */
        const CampaignNegativeCustomAudienceAssociations = 'CampaignNegativeCustomAudienceAssociations';

        /** Include Campaign In Market Audience Association records in the download that each represent the association relationship between a campaign and an in-market audience. */
        const CampaignInMarketAudienceAssociations = 'CampaignInMarketAudienceAssociations';

        /** Include Campaign Negative In Market Audience Association records in the download that each represent the association relationship between a campaign and an in-market audience exclusion. */
        const CampaignNegativeInMarketAudienceAssociations = 'CampaignNegativeInMarketAudienceAssociations';

        /** Include Campaign Product Audience Association records in the download that each represent the association relationship between a campaign and a product audience. */
        const CampaignProductAudienceAssociations = 'CampaignProductAudienceAssociations';

        /** Include Campaign Negative Product Audience Association records in the download that each represent the association relationship between a campaign and a product audience exclusion. */
        const CampaignNegativeProductAudienceAssociations = 'CampaignNegativeProductAudienceAssociations';

        /** Include Campaign Remarketing List Association records in the download that each represent the association relationship between a campaign and a remarketing list. */
        const CampaignRemarketingListAssociations = 'CampaignRemarketingListAssociations';

        /** Include Campaign Negative Remarketing List Association records in the download that each represent the association relationship between a campaign and a remarketing list exclusion. */
        const CampaignNegativeRemarketingListAssociations = 'CampaignNegativeRemarketingListAssociations';

        /** Include Campaign Similar Remarketing List Association records in the download that each represent the association relationship between a campaign and a similar remarketing list. */
        const CampaignSimilarRemarketingListAssociations = 'CampaignSimilarRemarketingListAssociations';

        /** Include Campaign Negative Similar Remarketing List Association records in the download that each represent the association relationship between a campaign and a similar remarketing list exclusion. */
        const CampaignNegativeSimilarRemarketingListAssociations = 'CampaignNegativeSimilarRemarketingListAssociations';

        /** Include Feed records in the download data. */
        const Feeds = 'Feeds';

        /** Include Feed Item records in the download data. */
        const FeedItems = 'FeedItems';

        /** Include Campaign Negative Store Criterion records in the download data. */
        const CampaignNegativeStoreCriterions = 'CampaignNegativeStoreCriterions';

        /** Include Promotion Ad Extension records in the download data. */
        const PromotionAdExtensions = 'PromotionAdExtensions';

        /** Include Account Promotion Ad Extension records in the download that represents the association relationship between an account and a promotion ad extension. */
        const AccountPromotionAdExtensions = 'AccountPromotionAdExtensions';

        /** Include Campaign Promotion Ad Extension records in the download that represents the association relationship between a campaign and a promotion ad extension. */
        const CampaignPromotionAdExtensions = 'CampaignPromotionAdExtensions';

        /** Include Ad Group Promotion Ad Extension records in the download that each represent the association relationship between an ad group and a promotion ad extension. */
        const AdGroupPromotionAdExtensions = 'AdGroupPromotionAdExtensions';

        /** Include Combined List records in the download data. */
        const CombinedLists = 'CombinedLists';

        /** Include Ad Group Combined List Association records in the download that each represent the association relationship between an ad group and a combined list. */
        const AdGroupCombinedListAssociations = 'AdGroupCombinedListAssociations';

        /** Include Ad Group Negative Combined List Association records in the download that each represent the association relationship between an ad group and a combined list exclusion. */
        const AdGroupNegativeCombinedListAssociations = 'AdGroupNegativeCombinedListAssociations';

        /** Include Campaign Combined List Association records in the download that each represent the association relationship between a campaign and a combined list. */
        const CampaignCombinedListAssociations = 'CampaignCombinedListAssociations';

        /** Include Campaign Negative Combined List Association records in the download that each represent the association relationship between a campaign and a combined list exclusion. */
        const CampaignNegativeCombinedListAssociations = 'CampaignNegativeCombinedListAssociations';

        /** Include Image records in the download data. */
        const Images = 'Images';

        /** Include Customer List records in the download data. */
        const CustomerLists = 'CustomerLists';

        /** Include Ad Group Customer List Association records in the download that each represent the association relationship between an ad group and a customer list. */
        const AdGroupCustomerListAssociations = 'AdGroupCustomerListAssociations';

        /** Include Ad Group Negative Customer List Association records in the download that each represent the association relationship between an ad group and a customer list exclusion. */
        const AdGroupNegativeCustomerListAssociations = 'AdGroupNegativeCustomerListAssociations';

        /** Include Campaign Customer List Association records in the download that each represent the association relationship between a campaign and a customer list. */
        const CampaignCustomerListAssociations = 'CampaignCustomerListAssociations';

        /** Include Campaign Negative Customer List Association records in the download that each represent the association relationship between a campaign and a customer list exclusion. */
        const CampaignNegativeCustomerListAssociations = 'CampaignNegativeCustomerListAssociations';

        /** Include Filter Link Ad Extension records in the download data. */
        const FilterLinkAdExtensions = 'FilterLinkAdExtensions';

        /** Include Account Filter Link Ad Extension records in the download that represents the association relationship between an account and a filter link ad extension. */
        const AccountFilterLinkAdExtensions = 'AccountFilterLinkAdExtensions';

        /** Include Campaign Filter Link Ad Extension records in the download that represents the association relationship between a campaign and a filter link ad extension. */
        const CampaignFilterLinkAdExtensions = 'CampaignFilterLinkAdExtensions';

        /** Include Ad Group Filter Link Ad Extension records in the download that each represent the association relationship between an ad group and a filter link ad extension. */
        const AdGroupFilterLinkAdExtensions = 'AdGroupFilterLinkAdExtensions';

        /** Include Flyer Ad Extension records in the download data. */
        const FlyerAdExtensions = 'FlyerAdExtensions';

        /** Include Account Flyer Ad Extension records in the download that represents the association relationship between an account and a flyer ad extension. */
        const AccountFlyerAdExtensions = 'AccountFlyerAdExtensions';

        /** Include Campaign Flyer Ad Extension records in the download that represents the association relationship between a campaign and a flyer ad extension. */
        const CampaignFlyerAdExtensions = 'CampaignFlyerAdExtensions';

        /** Include Ad Group Flyer Ad Extension records in the download that each represent the association relationship between an ad group and a flyer ad extension. */
        const AdGroupFlyerAdExtensions = 'AdGroupFlyerAdExtensions';

        /** Include Bid Strategy records in the download data. */
        const BidStrategies = 'BidStrategies';

        /** Include Video Ad Extension records in the download data. */
        const VideoAdExtensions = 'VideoAdExtensions';

        /** Include Account Video Ad Extension records in the download that represents the association relationship between an account and a video ad extension. */
        const AccountVideoAdExtensions = 'AccountVideoAdExtensions';

        /** Include Campaign Video Ad Extension records in the download that represents the association relationship between a campaign and a video ad extension. */
        const CampaignVideoAdExtensions = 'CampaignVideoAdExtensions';

        /** Include Ad Group Video Ad Extension records in the download that each represent the association relationship between an ad group and a video ad extension. */
        const AdGroupVideoAdExtensions = 'AdGroupVideoAdExtensions';

        /** Include Video records in the download data. */
        const Videos = 'Videos';

        /** Include Disclaimer Ad Extension records in the download data. */
        const DisclaimerAdExtensions = 'DisclaimerAdExtensions';

        /** Include Campaign Disclaimer Ad Extension records in the download that represents the association relationship between a campaign and a disclaimer ad extension. */
        const CampaignDisclaimerAdExtensions = 'CampaignDisclaimerAdExtensions';

        /** Reserved. */
        const AdcustomizerAttribute = 'AdcustomizerAttribute';

        /** Reserved. */
        const CampaignAdcustomizerAttribute = 'CampaignAdcustomizerAttribute';

        /** Reserved. */
        const AdGroupAdcustomizerAttribute = 'AdGroupAdcustomizerAttribute';

        /** Reserved. */
        const KeywordAdcustomizerAttribute = 'KeywordAdcustomizerAttribute';

        /** Include Campaign level conversion goal records in the download data. */
        const CampaignConversionGoal = 'CampaignConversionGoal';

        /** Reserved. */
        const AdGroupHotelListingGroups = 'AdGroupHotelListingGroups';
    }

}
