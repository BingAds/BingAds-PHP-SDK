<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductDimensionPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/productdimensionperformancereportcolumn?view=bingads-13 ProductDimensionPerformanceReportColumn Value Set
     * 
     * @used-by ProductDimensionPerformanceReportRequest
     */
    final class ProductDimensionPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The entire Microsoft Advertising Network made up of Microsoft sites and select traffic, and only partner traffic. */
        const Network = 'Network';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The language of the publisher where the ad was shown. */
        const Language = 'Language';

        /** The unique identifier provided by a merchant for each product offer. */
        const MerchantProductId = 'MerchantProductId';

        /** The product item name. */
        const Title = 'Title';

        /** The condition of a product item. */
        const Condition = 'Condition';

        /** The product item's manufacturer, brand, or publisher. */
        const Brand = 'Brand';

        /** The different price for products in your catalog. */
        const Price = 'Price';

        /** The value of the Custom_label_0 field in your Microsoft Merchant Center catalog. */
        const CustomLabel0 = 'CustomLabel0';

        /** The value of the Custom_label_1 field in your Microsoft Merchant Center catalog. */
        const CustomLabel1 = 'CustomLabel1';

        /** The value of the Custom_label_2 field in your Microsoft Merchant Center catalog. */
        const CustomLabel2 = 'CustomLabel2';

        /** The value of the Custom_label_3 field in your Microsoft Merchant Center catalog. */
        const CustomLabel3 = 'CustomLabel3';

        /** The value of the Custom_label_4 field in your Microsoft Merchant Center catalog. */
        const CustomLabel4 = 'CustomLabel4';

        /** The first level value of the Product_type field in your Microsoft Merchant Center catalog. */
        const ProductType1 = 'ProductType1';

        /** The second level value of the Product_type field in your Microsoft Merchant Center catalog. */
        const ProductType2 = 'ProductType2';

        /** The third level value of the Product_type field in your Microsoft Merchant Center catalog. */
        const ProductType3 = 'ProductType3';

        /** The fourth level value of the Product_type field in your Microsoft Merchant Center catalog. */
        const ProductType4 = 'ProductType4';

        /** The fifth level value of the Product_type field in your Microsoft Merchant Center catalog. */
        const ProductType5 = 'ProductType5';

        /** The first level value of the Product_category field in your Microsoft Merchant Center catalog. */
        const ProductCategory1 = 'ProductCategory1';

        /** The second level value of the Product_category field in your Microsoft Merchant Center catalog. */
        const ProductCategory2 = 'ProductCategory2';

        /** The third level value of the Product_category field in your Microsoft Merchant Center catalog. */
        const ProductCategory3 = 'ProductCategory3';

        /** The fourth level value of the Product_category field in your Microsoft Merchant Center catalog. */
        const ProductCategory4 = 'ProductCategory4';

        /** The fifth level value of the Product_category field in your Microsoft Merchant Center catalog. */
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

        /** The merchant or store name that offers the product. */
        const SellerName = 'SellerName';

        /** The language for the product offer. */
        const OfferLanguage = 'OfferLanguage';

        /** The country of sale for the product catalog. */
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

        /** Indicates whether the ad impression appeared in a top position or elsewhere. */
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

        /** The unique identifier for the Microsoft Merchant Center store. */
        const StoreId = 'StoreId';

        /** The number of times an ad that is being co-bid by your manufacturer partners has been displayed on search results pages or other sites on the Microsoft Advertising Network. */
        const AssistedImpressions = 'AssistedImpressions';

        /** Clicks on your ads that have received co-bids from your manufacturer partners. */
        const AssistedClicks = 'AssistedClicks';

        /** The percentage of clicks that went to your ads. */
        const ClickSharePercent = 'ClickSharePercent';

        /** The number of times your ad is shown in the top position as a percentage of the total available impressions in the market you were targeting. */
        const AbsoluteTopImpressionSharePercent = 'AbsoluteTopImpressionSharePercent';

        /** The number of conversions. */
        const AssistedConversions = 'AssistedConversions';

        /** The number of conversions. */
        const AllConversions = 'AllConversions';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const AllRevenue = 'AllRevenue';

        /** The conversion rate as a percentage. */
        const AllConversionRate = 'AllConversionRate';

        /** The cost per conversion. */
        const AllCostPerConversion = 'AllCostPerConversion';

        /** The return on ad spend (ROAS). */
        const AllReturnOnAdSpend = 'AllReturnOnAdSpend';

        /** The revenue per conversion. */
        const AllRevenuePerConversion = 'AllRevenuePerConversion';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversions = 'ViewThroughConversions';

        /** The name of the goal you set for the conversions you want, meaning actions customers take after clicking your ad. */
        const Goal = 'Goal';

        /** The type of conversion goal. */
        const GoalType = 'GoalType';

        /** The product purchased from your catalog or via your retail partner. */
        const ProductBought = 'ProductBought';

        /** The quantity of the product purchased (ProductBought) from your catalog or via your retail partner. */
        const QuantityBought = 'QuantityBought';

        /** How often your ad was in the first position of all results, as a percentage of your total impressions. */
        const AbsoluteTopImpressionRatePercent = 'AbsoluteTopImpressionRatePercent';

        /** The total advertising cost divided by the number of impressions (in thousands). */
        const AverageCpm = 'AverageCpm';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** Reserved for future use. */
        const AssistedConversionsQualified = 'AssistedConversionsQualified';

        /** The number of conversions. */
        const AllConversionsQualified = 'AllConversionsQualified';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversionsQualified = 'ViewThroughConversionsQualified';

        /** The title associated with the purchased product. */
        const ProductBoughtTitle = 'ProductBoughtTitle';

        /** Global Trade Item Number (GTIN) is a unique numerical value for commercial products that usually appears printed under the barcode on retail products. */
        const GTIN = 'GTIN';

        /** Manufacturer Part Number (MPN) is a unique number that identifies the product to its manufacturer. */
        const MPN = 'MPN';

        /** The revenue optionally reported by the advertiser as a result of view-through conversions. */
        const ViewThroughRevenue = 'ViewThroughRevenue';

        /** Reserved. */
        const GoalId = 'GoalId';
    }

}
