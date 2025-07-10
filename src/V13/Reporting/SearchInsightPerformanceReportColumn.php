<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the SearcyhInsightPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchinsightperformancereportcolumn?view=bingads-13 SearchInsightPerformanceReportColumn Value Set
     * 
     * @used-by SearchInsightPerformanceReportRequest
     */
    final class SearchInsightPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The search term used by your potential audience. */
        const SearchQuery = 'SearchQuery';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The Microsoft Advertising assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The current asset group status. */
        const AssetGroupStatus = 'AssetGroupStatus';

        /** The search category used by your potential audience. */
        const SearchCategory = 'SearchCategory';

        /** The number of times a specific keyword or phrase is searched within a given timeframe. */
        const SearchVolume = 'SearchVolume';
    }

}
