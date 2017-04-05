<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductDimensionPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn913140(v=msads.90).aspx ProductDimensionPerformanceReportColumn Value Set
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

        /** The account lifecycle status. */
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

        /** The ad group language. */
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

        /** The number of times that the ads in the account were clicked. */
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
    }

}
