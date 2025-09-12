<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a value set for AssetGroupPerformanceReportColumn.
     * @link https:/learn.microsoft.com/advertising/reporting-service/assetgroupperformancereportcolumn?view=bingads-13 AssetGroupPerformanceReportColumn Value Set
     * 
     * @used-by AssetGroupPerformanceReportRequest
     */
    final class AssetGroupPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The current asset group status. */
        const AssetGroupStatus = 'AssetGroupStatus';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** Reserved. */
        const CampaignType = 'CampaignType';

        /** Reserved. */
        const CostPerConversion = 'CostPerConversion';
    }

}
