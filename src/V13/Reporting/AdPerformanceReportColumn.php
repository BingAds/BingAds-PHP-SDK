<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/adperformancereportcolumn?view=bingads-13 AdPerformanceReportColumn Value Set
     * 
     * @used-by AdPerformanceReportRequest
     */
    final class AdPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad title. */
        const AdTitle = 'AdTitle';

        /** The first ad description that appears below the path in your ad. */
        const AdDescription = 'AdDescription';

        /** The second ad description that appears below the path in your ad. */
        const AdDescription2 = 'AdDescription2';

        /** The ad type. */
        const AdType = 'AdType';

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

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The language of the publisher where the ad was shown. */
        const Language = 'Language';

        /** The ad display URL. */
        const DisplayUrl = 'DisplayUrl';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The entire Microsoft Advertising Network made up of Microsoft sites and select traffic, and only partner traffic. */
        const Network = 'Network';

        /** Indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

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

        /** The current tracking template of the ad, keyword, or criterion. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current custom parameters set of the ad, keyword, or criterion. */
        const CustomParameters = 'CustomParameters';

        /** The Final URL of the ad, keyword, or criterion. */
        const FinalUrl = 'FinalUrl';

        /** The Final Mobile URL of the ad, keyword, or criterion. */
        const FinalMobileUrl = 'FinalMobileUrl';

        /** Reserved for future use. */
        const FinalAppUrl = 'FinalAppUrl';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The title part 1 attribute of an ad. */
        const TitlePart1 = 'TitlePart1';

        /** The title part 2 attribute of an ad. */
        const TitlePart2 = 'TitlePart2';

        /** The title part 3 attribute of an ad. */
        const TitlePart3 = 'TitlePart3';

        /** The shorter of two possible responsive ad headlines for Audience campaigns. */
        const Headline = 'Headline';

        /** The longer of two possible responsive ad headlines for Audience campaigns. */
        const LongHeadline = 'LongHeadline';

        /** Depending on your responsive ad's placement, your business's name may appear in your ad. */
        const BusinessName = 'BusinessName';

        /** The path 1 attribute of an ad. */
        const Path1 = 'Path1';

        /** The path 2 attribute of an ad. */
        const Path2 = 'Path2';

        /** The labels applied to the ad. */
        const AdLabels = 'AdLabels';

        /** The Microsoft Advertising assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';

        /** The campaign type. */
        const CampaignType = 'CampaignType';

        /** The Microsoft Advertising assigned identifier of an experiment campaign. */
        const BaseCampaignId = 'BaseCampaignId';

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

        /** A place in your final URL where you can add parameters that will be attached to the end of your landing page URL. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversions = 'ViewThroughConversions';

        /** The name of the goal you set for the conversions you want, meaning actions customers take after clicking your ad. */
        const Goal = 'Goal';

        /** The type of conversion goal. */
        const GoalType = 'GoalType';

        /** How often your ad was in the first position of all results, as a percentage of your total impressions. */
        const AbsoluteTopImpressionRatePercent = 'AbsoluteTopImpressionRatePercent';

        /** The percentage of times your ad showed in the mainline, the top placement where ads appear above the search results, out of your total impressions. */
        const TopImpressionRatePercent = 'TopImpressionRatePercent';

        /** The total advertising cost divided by the number of impressions (in thousands). */
        const AverageCpm = 'AverageCpm';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

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

        /** Reserved. */
        const AdStrength = 'AdStrength';

        /** Reserved. */
        const AdStrengthActionItems = 'AdStrengthActionItems';
    }

}
