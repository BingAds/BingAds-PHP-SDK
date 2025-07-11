<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CombinationPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/combinationperformancereportcolumn?view=bingads-13 CombinationPerformanceReportColumn Value Set
     * 
     * @used-by CombinationPerformanceReportRequest
     */
    final class CombinationPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The campaign type. */
        const CampaignType = 'CampaignType';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad type. */
        const AdType = 'AdType';

        /** The content of the headline 1 asset in a combination record. */
        const Headline1 = 'Headline1';

        /** The content of the headline 2 asset in a combination record. */
        const Headline2 = 'Headline2';

        /** The content of the headline 3 asset in a combination record */
        const Headline3 = 'Headline3';

        /** The content of the long headline asset in a combination record. */
        const CombinationLongHeadline = 'CombinationLongHeadline';

        /** Reserved. */
        const Description1 = 'Description1';

        /** Reserved. */
        const Description2 = 'Description2';

        /** The image URL of the image asset in a combination record. */
        const Image = 'Image';

        /** The image URL of the logo asset in a combination record. */
        const Logo = 'Logo';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The number of conversions. */
        const Conversions = 'Conversions';
    }

}
