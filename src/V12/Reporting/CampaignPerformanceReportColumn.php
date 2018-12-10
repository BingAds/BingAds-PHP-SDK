<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CampaignPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/campaignperformancereportcolumn?view=bingads-12 CampaignPerformanceReportColumn Value Set
     * 
     * @used-by CampaignPerformanceReportRequest
     */
    final class CampaignPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The network where you want your ads to show. */
        const AdDistribution = 'AdDistribution';

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

        /** The average position of the ad on a webpage. */
        const AveragePosition = 'AveragePosition';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** Clicks that exhibit a low likelihood of commercial intent. */
        const LowQualityClicks = 'LowQualityClicks';

        /** The low-quality clicks as a percentage. */
        const LowQualityClicksPercent = 'LowQualityClicksPercent';

        /** The number of impressions that result from low-quality keyword searches. */
        const LowQualityImpressions = 'LowQualityImpressions';

        /** The low-quality impressions as a percentage. */
        const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';

        /** The number of conversions that originate from low-quality clicks. */
        const LowQualityConversions = 'LowQualityConversions';

        /** The low-quality conversion rate as a percentage. */
        const LowQualityConversionRate = 'LowQualityConversionRate';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The estimated percentage of impressions, out of the total available impressions in the market you were targeting. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your daily or monthly budget. */
        const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

        /** The estimated percentage of impressions your ad did not receive due to issues with your ad ranking. */
        const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** How well your keyword competes against other keywords targeting the same traffic. */
        const ExpectedCtr = 'ExpectedCtr';

        /** How closely related your ads is to the customer's search query or other input. */
        const AdRelevance = 'AdRelevance';

        /** An aggregate quality assessment of all landing pages on your site. */
        const LandingPageExperience = 'LandingPageExperience';

        /** The historical quality score for each row is the value that was calculated for quality score on that date. */
        const HistoricalQualityScore = 'HistoricalQualityScore';

        /** Historical average of expected click-through rate scores going back as far as 18 months from the current date. */
        const HistoricalExpectedCtr = 'HistoricalExpectedCtr';

        /** Historical average of ad relevance scores back as far as 18 months from the current date. */
        const HistoricalAdRelevance = 'HistoricalAdRelevance';

        /** Historical average of landing page experience scores back as far as 18 months from the current date. */
        const HistoricalLandingPageExperience = 'HistoricalLandingPageExperience';

        /** The percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
        const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

        /** The percentage of impression share lost due to low ad relevance. */
        const ImpressionLostToAdRelevancePercent = 'ImpressionLostToAdRelevancePercent';

        /** The percentage of impression share lost due to low expected click-through rate. */
        const ImpressionLostToExpectedCtrPercent = 'ImpressionLostToExpectedCtrPercent';

        /** The number of times your tracked number was shown on all devices. */
        const PhoneImpressions = 'PhoneImpressions';

        /** The number of total calls to the tracked phone number that showed with your ad. */
        const PhoneCalls = 'PhoneCalls';

        /** The number of calls dialed manually from any device to the tracked phone number. */
        const ManualCalls = 'ManualCalls';

        /** The number of phone calls initiated by clicks. */
        const ClickCalls = 'ClickCalls';

        /** The phone-through rate (Ptr). */
        const Ptr = 'Ptr';

        /** The average cost per phone call (CPP). */
        const AverageCpp = 'AverageCpp';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The current tracking template for the campaign. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current set of custom parameters for the campaign. */
        const CustomParameters = 'CustomParameters';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The name of the budget. */
        const BudgetName = 'BudgetName';

        /** The budget status. */
        const BudgetStatus = 'BudgetStatus';

        /** Indicates whether or not the campaign is currently spending from the budget mentioned in the BudgetName column. */
        const BudgetAssociationStatus = 'BudgetAssociationStatus';

        /** Clicks that are filtered by general methods, such as blacklists and activity-based detection, and that exhibit a low likelihood of commercial intent. */
        const LowQualityGeneralClicks = 'LowQualityGeneralClicks';

        /** Invalid clicks that use sophisticated means to appear valid. */
        const LowQualitySophisticatedClicks = 'LowQualitySophisticatedClicks';

        /** The labels applied to the campaign. */
        const CampaignLabels = 'CampaignLabels';

        /** The estimated percentage of impressions that your campaign received for searches that exactly matched your keyword, out of the total available exact match impressions you were eligible to receive. */
        const ExactMatchImpressionSharePercent = 'ExactMatchImpressionSharePercent';

        /** The Bing Ads assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The percentage of clicks that went to your ads. */
        const ClickSharePercent = 'ClickSharePercent';

        /** The number of times your ad is shown in the top position as a percentage of the total available impressions in the market you were targeting. */
        const AbsoluteTopImpressionSharePercent = 'AbsoluteTopImpressionSharePercent';
    }

}
