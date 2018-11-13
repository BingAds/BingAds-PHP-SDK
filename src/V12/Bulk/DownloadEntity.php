<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Defines the entities that may be downloaded and uploaded in bulk.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/downloadentity?view=bingads-12 DownloadEntity Value Set
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

        /** This deprecated value is reserved for internal use and will be removed from a future version of the Bing Ads API. */
        const ActionLinkAdExtensions = 'ActionLinkAdExtensions';

        /** This deprecated value is reserved for internal use and will be removed from a future version of the Bing Ads API. */
        const CampaignActionLinkAdExtensions = 'CampaignActionLinkAdExtensions';

        /** This deprecated value is reserved for internal use and will be removed from a future version of the Bing Ads API. */
        const AdGroupActionLinkAdExtensions = 'AdGroupActionLinkAdExtensions';

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

        /** Include Custom Audience, In Market Audience, Product Audience, and Remarketing List records in the download data. */
        const Audiences = 'Audiences';

        /** Include Ad Group Custom Audience Association, Ad Group In Market Audience Association, Ad Group Product Audience Association, and Ad Group Remarketing List Association records in the download data. */
        const AdGroupAudienceAssociations = 'AdGroupAudienceAssociations';

        /** Include Ad Group Negative Custom Audience Association, Ad Group Negative In Market Audience Association, Ad Group Negative Product Audience Association, and Ad Group Negative Remarketing List Association records in the download data. */
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

        /** This deprecated value is reserved for internal use and will be removed from a future version of the Bing Ads API. */
        const AccountActionLinkAdExtensions = 'AccountActionLinkAdExtensions';

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

        /** Reserved for future use. */
        const ActionAdExtensions = 'ActionAdExtensions';

        /** Reserved for future use. */
        const CampaignActionAdExtensions = 'CampaignActionAdExtensions';

        /** Reserved for future use. */
        const AdGroupActionAdExtensions = 'AdGroupActionAdExtensions';

        /** Reserved for future use. */
        const AccountActionAdExtensions = 'AccountActionAdExtensions';

        /** Include Responsive Search Ad records in the download data. */
        const ResponsiveSearchAds = 'ResponsiveSearchAds';

        /** Include Responsive Search Ad Label records in the download that each represent a label applied to a responsive search ad. */
        const ResponsiveSearchAdLabels = 'ResponsiveSearchAdLabels';
    }

}
