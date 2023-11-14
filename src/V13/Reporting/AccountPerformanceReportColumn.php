<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AccountPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/accountperformancereportcolumn?view=bingads-13 AccountPerformanceReportColumn Value Set
     * 
     * @used-by AccountPerformanceReportRequest
     */
    final class AccountPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

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
        const ImpressionLostToRankAggPercent = 'ImpressionLostToRankAggPercent';

        /** The number of times your tracked number was shown on all devices. */
        const PhoneImpressions = 'PhoneImpressions';

        /** The number of total calls to the tracked phone number that showed with your ad. */
        const PhoneCalls = 'PhoneCalls';

        /** The phone-through rate (Ptr). */
        const Ptr = 'Ptr';

        /** The entire Microsoft Advertising Network made up of Microsoft sites and select traffic, and only partner traffic. */
        const Network = 'Network';

        /** Indicates whether the ad impression appeared in a top position or elsewhere. */
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

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** Clicks that are filtered by general methods, such as deny lists and activity-based detection, and that exhibit a low likelihood of commercial intent. */
        const LowQualityGeneralClicks = 'LowQualityGeneralClicks';

        /** Invalid clicks that use sophisticated means to appear valid. */
        const LowQualitySophisticatedClicks = 'LowQualitySophisticatedClicks';

        /** The estimated percentage of impressions that your account received for searches that exactly matched your keyword, out of the total available exact match impressions you were eligible to receive. */
        const ExactMatchImpressionSharePercent = 'ExactMatchImpressionSharePercent';

        /** The Microsoft Advertising assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The percentage of clicks that went to your ads. */
        const ClickSharePercent = 'ClickSharePercent';

        /** The estimated percentage of times your ad was in the first position of all results, out of the estimated number of first position impressions you were eligible to receive. */
        const AbsoluteTopImpressionSharePercent = 'AbsoluteTopImpressionSharePercent';

        /** A percentage estimate of how often poor ad rank kept your ad from showing in the mainline, the top ad placements above the search results. */
        const TopImpressionShareLostToRankPercent = 'TopImpressionShareLostToRankPercent';

        /** The estimated percentage of mainline impressions, where ads appear above the search results, that were lost due to insufficient budget. */
        const TopImpressionShareLostToBudgetPercent = 'TopImpressionShareLostToBudgetPercent';

        /** The estimated percentage of how often poor ad rank kept your ad from showing in the first ad position at the top of search results. */
        const AbsoluteTopImpressionShareLostToRankPercent = 'AbsoluteTopImpressionShareLostToRankPercent';

        /** The estimated percentage of how often your ad missed showing in the very top ad position, above search results, due to insufficient budget. */
        const AbsoluteTopImpressionShareLostToBudgetPercent = 'AbsoluteTopImpressionShareLostToBudgetPercent';

        /** The percentage of impressions for your ad in the mainline, the top ad placements above the search results, out of the estimated number of mainline impressions you were eligible to receive. */
        const TopImpressionSharePercent = 'TopImpressionSharePercent';

        /** How often your ad was in the first position of all results, as a percentage of your total impressions. */
        const AbsoluteTopImpressionRatePercent = 'AbsoluteTopImpressionRatePercent';

        /** The percentage of times your ad showed in the mainline, the top placement where ads appear above the search results, out of your total impressions. */
        const TopImpressionRatePercent = 'TopImpressionRatePercent';

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

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversions = 'ViewThroughConversions';

        /** The name of the goal you set for the conversions you want, meaning actions customers take after clicking your ad. */
        const Goal = 'Goal';

        /** The type of conversion goal. */
        const GoalType = 'GoalType';

        /** The estimated percentage of impressions, out of the total available impressions you could have received on the Microsoft Audience Network. */
        const AudienceImpressionSharePercent = 'AudienceImpressionSharePercent';

        /** The percentage of impression share you lost due to low rank on the Microsoft Audience Network. */
        const AudienceImpressionLostToRankPercent = 'AudienceImpressionLostToRankPercent';

        /** The percentage of impression share you lost due to insufficient budget on the Microsoft Audience Network. */
        const AudienceImpressionLostToBudgetPercent = 'AudienceImpressionLostToBudgetPercent';

        /** The total advertising cost divided by the number of impressions (in thousands). */
        const AverageCpm = 'AverageCpm';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** The number of conversions that originate from low-quality clicks. */
        const LowQualityConversionsQualified = 'LowQualityConversionsQualified';

        /** The number of conversions. */
        const AllConversionsQualified = 'AllConversionsQualified';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversionsQualified = 'ViewThroughConversionsQualified';

        /** The revenue optionally reported by the advertiser as a result of view-through conversions. */
        const ViewThroughRevenue = 'ViewThroughRevenue';

        /** The number of times the video was played and watched for at least two continuous seconds with more than 50% of the screen in view. */
        const VideoViews = 'VideoViews';

        /** The number of video views divided by the number of impressions. */
        const ViewThroughRate = 'ViewThroughRate';

        /** Average total spend divided by video views. */
        const AverageCPV = 'AverageCPV';

        /** The number of times a person completed at least 25% of a video. */
        const VideoViewsAt25Percent = 'VideoViewsAt25Percent';

        /** The number of times a person completed at least 50% of a video. */
        const VideoViewsAt50Percent = 'VideoViewsAt50Percent';

        /** The number of times a person completed at least 75% of a video. */
        const VideoViewsAt75Percent = 'VideoViewsAt75Percent';

        /** Number of times a person watched the entire video to completion. */
        const CompletedVideoViews = 'CompletedVideoViews';

        /** The number of completed video views divided by the number of total video views. */
        const VideoCompletionRate = 'VideoCompletionRate';

        /** Total amount of time a person spent watching the video in milliseconds. */
        const TotalWatchTimeInMS = 'TotalWatchTimeInMS';

        /** Total watch time divided by the number of video views. */
        const AverageWatchTimePerVideoView = 'AverageWatchTimePerVideoView';

        /** Total watch time, in milliseconds, divided by the number of impressions. */
        const AverageWatchTimePerImpression = 'AverageWatchTimePerImpression';

        /** The total number of sales. */
        const Sales = 'Sales';

        /** The cost per sale. */
        const CostPerSale = 'CostPerSale';

        /** The revenue per sale. */
        const RevenuePerSale = 'RevenuePerSale';

        /** The total number of installs. */
        const Installs = 'Installs';

        /** The cost per install. */
        const CostPerInstall = 'CostPerInstall';

        /** The revenue per install. */
        const RevenuePerInstall = 'RevenuePerInstall';
    }

}
