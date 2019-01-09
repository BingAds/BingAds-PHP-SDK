<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the DSAAutoTargetPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/dsaautotargetperformancereportcolumn?view=bingads-12 DSAAutoTargetPerformanceReportColumn Value Set
     * 
     * @used-by DSAAutoTargetPerformanceReportRequest
     */
    final class DSAAutoTargetPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** The current tracking template of the ad. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current custom parameters of the ad. */
        const CustomParameters = 'CustomParameters';

        /** The Bing Ads assigned identifier of the dynamic ad target, also known in Campaign Management and Bulk API as the ad group criterion ID. */
        const DynamicAdTargetId = 'DynamicAdTargetId';

        /** The dynamic ad target or webpage condition that Bing matched to your website. */
        const DynamicAdTarget = 'DynamicAdTarget';

        /** The current status of the dynamic ad target. */
        const DynamicAdTargetStatus = 'DynamicAdTargetStatus';

        /** A score from 0.0 to 1.0 that indicates the percentage of pages in the requested language that belong to a particular domain out of all the pages that Bing has indexed for the same language your website's domain. */
        const WebsiteCoverage = 'WebsiteCoverage';

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

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';
    }

}
