<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ShareOfVoiceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/jj592910(v=msads.90).aspx ShareOfVoiceReportColumn Value Set
     * 
     * @used-by ShareOfVoiceReportRequest
     */
    final class ShareOfVoiceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The ad group language. */
        const Language = 'Language';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Bing Ads assigned identifier of a keyword. */
        const KeywordId = 'KeywordId';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** The number of times that the ads in the account were clicked. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The percentage of time your ads would have been displayed to users, but were not due to one or more of the following reasons:Your ad was not relevant to the user's search query. */
        const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
        const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';
        const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
        const KeywordRelevance = 'KeywordRelevance';

        /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The ad distribution attribute of an ad group. */
        const AdDistribution = 'AdDistribution';
        const ClickSharePercent = 'ClickSharePercent';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The account lifecycle status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The keyword status. */
        const KeywordStatus = 'KeywordStatus';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';
    }

}
