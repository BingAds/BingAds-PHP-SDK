<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the MMMPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/mmmperformancereportcolumn?view=bingads-13 MMMPerformanceReportColumn Value Set
     * 
     * @used-by MMMPerformanceReportRequest
     */
    final class MMMPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name */
        const AssetGroupName = 'AssetGroupName';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The country or region where the user was physically located when they clicked the ad. */
        const Country = 'Country';

        /** The state where the user was physically located when they clicked the ad. */
        const State = 'State';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** The metro area (Microsoft Market Area in the United States) where the user was physically located when they clicked the ad. */
        const MetroArea = 'MetroArea';
    }

}
