<?php
// Generated on 5/7/2017 5:45:55 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductOfferPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn743720(v=msads.90).aspx ProductOfferPerformanceReportColumn Value Set
     * 
     * @used-by ProductOfferPerformanceReportRequest
     */
    final class ProductOfferPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The ad group language. */
        const Language = 'Language';

        /** The report will include a column that contains the unique identifier provided by a merchant for each product offer. */
        const MerchantProductId = 'MerchantProductId';

        /** The report will include a column that contains the merchant or store name that offers the product. */
        const SellerName = 'SellerName';

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

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}
