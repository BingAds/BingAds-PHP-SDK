<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ShareOfVoiceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/shareofvoicereportcolumn?view=bingads-12 ShareOfVoiceReportColumn Value Set
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

        /** The language of the country the ad is served in. */
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

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The estimated percentage of impressions, out of the total available impressions in the market you were targeting. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your daily or monthly budget. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your ad ranking. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The percentage of impression share lost due to low ad relevance. */
        const ImpressionLostToAdRelevancePercent = 'ImpressionLostToAdRelevancePercent';

        /** The percentage of impression share lost due to low expected click-through rate. */
        const ImpressionLostToExpectedCtrPercent = 'ImpressionLostToExpectedCtrPercent';

        /** Reserved for internal use. */
        const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The maximum cost per click bid that was in effect at the time the report was generated. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** How well your keyword competes against other keywords targeting the same traffic. */
        const ExpectedCtr = 'ExpectedCtr';

        /** How closely related your ads is to the customer's search query or other input. */
        const AdRelevance = 'AdRelevance';

        /** An aggregate quality assessment of all landing pages on your site. */
        const LandingPageExperience = 'LandingPageExperience';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The percentage of clicks that went to your ads. */
        const ClickSharePercent = 'ClickSharePercent';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The keyword status. */
        const KeywordStatus = 'KeywordStatus';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** The labels applied to the keyword. */
        const KeywordLabels = 'KeywordLabels';

        /** The estimated percentage of impressions that your campaign received for searches that exactly matched your keyword, out of the total available exact match impressions you were eligible to receive. */
        const ExactMatchImpressionSharePercent = 'ExactMatchImpressionSharePercent';
    }

}
