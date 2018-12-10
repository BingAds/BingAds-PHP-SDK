<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductDimensionPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/productdimensionperformancereportcolumn?view=bingads-12 ProductDimensionPerformanceReportColumn Value Set
     * 
     * @used-by ProductDimensionPerformanceReportRequest
     */
    final class ProductDimensionPerformanceReportColumn
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

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The report will include a column that contains the unique identifier provided by a merchant for each product offer. */
        const MerchantProductId = 'MerchantProductId';

        /** The product item name. */
        const Title = 'Title';

        /** The condition of a product item. */
        const Condition = 'Condition';

        /** The product item's manufacturer, brand, or publisher. */
        const Brand = 'Brand';

        /** The different price for products in your catalog. */
        const Price = 'Price';

        /** The value of the Custom_label_0 field in your Bing Merchant Center catalog. */
        const CustomLabel0 = 'CustomLabel0';

        /** The value of the Custom_label_1 field in your Bing Merchant Center catalog. */
        const CustomLabel1 = 'CustomLabel1';

        /** The value of the Custom_label_2 field in your Bing Merchant Center catalog. */
        const CustomLabel2 = 'CustomLabel2';

        /** The value of the Custom_label_3 field in your Bing Merchant Center catalog. */
        const CustomLabel3 = 'CustomLabel3';

        /** The value of the Custom_label_4 field in your Bing Merchant Center catalog. */
        const CustomLabel4 = 'CustomLabel4';

        /** The first level value of the Product_type field in your Bing Merchant Center catalog. */
        const ProductType1 = 'ProductType1';

        /** The second level value of the Product_type field in your Bing Merchant Center catalog. */
        const ProductType2 = 'ProductType2';

        /** The third level value of the Product_type field in your Bing Merchant Center catalog. */
        const ProductType3 = 'ProductType3';

        /** The fourth level value of the Product_type field in your Bing Merchant Center catalog. */
        const ProductType4 = 'ProductType4';

        /** The fifth level value of the Product_type field in your Bing Merchant Center catalog. */
        const ProductType5 = 'ProductType5';

        /** The first level value of the Product_category field in your Bing Merchant Center catalog. */
        const ProductCategory1 = 'ProductCategory1';

        /** The second level value of the Product_category field in your Bing Merchant Center catalog. */
        const ProductCategory2 = 'ProductCategory2';

        /** The third level value of the Product_category field in your Bing Merchant Center catalog. */
        const ProductCategory3 = 'ProductCategory3';

        /** The fourth level value of the Product_category field in your Bing Merchant Center catalog. */
        const ProductCategory4 = 'ProductCategory4';

        /** The fifth level value of the Product_category field in your Bing Merchant Center catalog. */
        const ProductCategory5 = 'ProductCategory5';

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

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The report will include a column that contains the merchant or store name that offers the product. */
        const SellerName = 'SellerName';

        /** The report will include a column that contains the language for the product offer. */
        const OfferLanguage = 'OfferLanguage';

        /** The report will include a column that contains the country of sale for the product catalog. */
        const CountryOfSale = 'CountryOfSale';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The estimated percentage of impressions, out of the total available impressions in the market you were targeting. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your daily or monthly budget. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your ad ranking. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** Shows you how much other advertisers are bidding on average on similar products as your current target. */
        const BenchmarkBid = 'BenchmarkBid';

        /** Shows you how other product ads for similar products are performing on average based on how often people who see the ad end up clicking on it. */
        const BenchmarkCtr = 'BenchmarkCtr';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

        /** The click type ID. */
        const ClickTypeId = 'ClickTypeId';

        /** The number of clicks when this ad element was present in the ad copy, whether this or another ad element was clicked on. */
        const TotalClicksOnAdElements = 'TotalClicksOnAdElements';

        /** Click type refers to each component of an ad that a customer can click. */
        const ClickType = 'ClickType';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** An alphanumeric identifier defined by the merchant to uniquely identify each local store. */
        const LocalStoreCode = 'LocalStoreCode';

        /** The unique identifier for the Bing Merchant Center store. */
        const StoreId = 'StoreId';

        /** The number of times an ad that is being co-bid by your manufacturer partners has been displayed on search results pages or other sites on the Bing Network. */
        const AssistedImpressions = 'AssistedImpressions';

        /** Clicks on your ads that have received co-bids from your manufacturer partners. */
        const AssistedClicks = 'AssistedClicks';

        /** The percentage of clicks that went to your ads. */
        const ClickSharePercent = 'ClickSharePercent';

        /** The number of times your ad is shown in the top position as a percentage of the total available impressions in the market you were targeting. */
        const AbsoluteTopImpressionSharePercent = 'AbsoluteTopImpressionSharePercent';
    }

}
