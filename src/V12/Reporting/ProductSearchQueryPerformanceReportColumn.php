<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductSearchQueryPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/productsearchqueryperformancereportcolumn?view=bingads-12 ProductSearchQueryPerformanceReportColumn Value Set
     * 
     * @used-by ProductSearchQueryPerformanceReportRequest
     */
    final class ProductSearchQueryPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The search term used by your potential audience. */
        const SearchQuery = 'SearchQuery';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that contains the unique identifier provided by a merchant for each product offer. */
        const MerchantProductId = 'MerchantProductId';

        /** The product item name. */
        const Title = 'Title';

        /** The click type ID. */
        const ClickTypeId = 'ClickTypeId';

        /** The number of clicks when this ad element was present in the ad copy, whether this or another ad element was clicked on. */
        const TotalClicksOnAdElements = 'TotalClicksOnAdElements';

        /** Click type refers to each component of an ad that a customer can click. */
        const ClickType = 'ClickType';

        /** The Bing Ads assigned identifier of an ad group criterion. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The forward slash ('/') delimited list of product conditions, reported as Operand = Attribute. */
        const ProductGroup = 'ProductGroup';

        /** The product partition type. */
        const PartitionType = 'PartitionType';

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

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The Bing Ads assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The number of times an ad that is being co-bid by your manufacturer partners has been displayed on search results pages or other sites on the Bing Network. */
        const AssistedImpressions = 'AssistedImpressions';

        /** Clicks on your ads that have received co-bids from your manufacturer partners. */
        const AssistedClicks = 'AssistedClicks';
    }

}
