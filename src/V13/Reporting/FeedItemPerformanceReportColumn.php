<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the feed item performance report.
     * @link https:/learn.microsoft.com/advertising/reporting-service/feeditemperformancereportcolumn?view=bingads-13 FeedItemPerformanceReportColumn Value Set
     * 
     * @used-by FeedItemPerformanceReportRequest
     */
    final class FeedItemPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The feed identifier. */
        const FeedId = 'FeedId';

        /** The feed item identifies. */
        const FeedItemId = 'FeedItemId';

        /** The number of times an ad has been displayed on search results pages or other sites on the Audience Network. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The sum of your cost-per-click (CPC) charges for your ads and keywords. */
        const Spend = 'Spend';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The number of conversions. */
        const AllConversions = 'AllConversions';

        /** The number of conversions. */
        const AllConversionsQualified = 'AllConversionsQualified';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const AllRevenue = 'AllRevenue';

        /** The cost per conversion. */
        const AllCostPerConversion = 'AllCostPerConversion';

        /** The conversion rate as a percentage. */
        const AllConversionRate = 'AllConversionRate';

        /** The revenue per conversion. */
        const AllRevenuePerConversion = 'AllRevenuePerConversion';

        /** The return on ad spend (ROAS). */
        const AllReturnOnAdSpend = 'AllReturnOnAdSpend';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversions = 'ViewThroughConversions';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversionsQualified = 'ViewThroughConversionsQualified';

        /** The revenue optionally reported by the advertiser as a result of view-through conversions. */
        const ViewThroughRevenue = 'ViewThroughRevenue';

        /** The number of ad views, divided by the number of impressions. */
        const ViewThroughConversionRate = 'ViewThroughConversionRate';
    }

}
