<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the ProductPartitionPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/productpartitionperformancereportcolumn?view=bingads-12 ProductPartitionPerformanceReportColumn Value Set
     * 
     * @used-by ProductPartitionPerformanceReportRequest
     */
    final class ProductPartitionPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The forward slash ('/') delimited list of product conditions, reported as Operand = Attribute. */
        const ProductGroup = 'ProductGroup';

        /** The Bing Ads assigned identifier of an ad group criterion, or product group in the context of a Bing Shopping campaign. */
        const AdGroupCriterionId = 'AdGroupCriterionId';

        /** The product partition type. */
        const PartitionType = 'PartitionType';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The maximum cost per click bid that was in effect at the time the report was generated. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

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

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The report will include a column that contains the language for the product offer. */
        const OfferLanguage = 'OfferLanguage';

        /** The report will include a column that contains the country of sale for the product catalog. */
        const CountryOfSale = 'CountryOfSale';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The current tracking template of the criterion. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current custom parameter set of the criterion. */
        const CustomParameters = 'CustomParameters';

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
