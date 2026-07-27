<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a report that provides detailed insights into individual clicks and ad performance.\
     * @link https:/learn.microsoft.com/advertising/reporting-service/msclickidperformancereportcolumn?view=bingads-13 MSClickIdPerformanceReportColumn Value Set
     * 
     * @used-by MSClickIdPerformanceReportRequest
     */
    final class MSClickIdPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The MSClickID identifier for an ad click event. */
        const MSClickId = 'MSClickId';

        /** The search term used by your potential audience. */
        const SearchQuery = 'SearchQuery';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The page number in the search results where the ad appeared. */
        const PageNumber = 'PageNumber';

        /** Indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The entire Microsoft Advertising Network made up of Microsoft sites and select traffic, cross-network traffic, and only partner traffic (this network type is deprecated as of July 2024). */
        const Network = 'Network';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The country or region where the user was physically located when they clicked the ad. */
        const Country = 'Country';

        /** The state where the user was physically located when they clicked the ad. */
        const State = 'State';

        /** The metro area (Microsoft Market Area in the United States) where the user was physically located when they clicked the ad. */
        const MetroArea = 'MetroArea';

        /** The city where the user was physically located when they clicked the ad. */
        const City = 'City';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The cost per click (CPC). */
        const Cpc = 'Cpc';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** The revenue optionally reported by the advertiser as a result of conversions<br/><br/>Available for accounts that are setup to use analytics with Microsoft Advertising Universal Event Tracking. */
        const Revenue = 'Revenue';
    }

}
