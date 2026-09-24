<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AudiencePerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/audienceperformancereportcolumn?view=bingads-13 AudiencePerformanceReportColumn Value Set
     * 
     * @used-by AudiencePerformanceReportRequest
     */
    final class AudiencePerformanceReportColumn
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

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The asset group ID. */
        const AssetGroupId = 'AssetGroupId';

        /** The Microsoft Advertising assigned identifier of the audience, for example the remarketing list ID. */
        const AudienceId = 'AudienceId';

        /** The audience name. */
        const AudienceName = 'AudienceName';

        /** The status of the association between the audience and either an ad group or campaign. */
        const AssociationStatus = 'AssociationStatus';

        /** This attribute reflects the current value of your ad group's audience bid adjustment, even if a different bid adjustment value was used when the ad was shown. */
        const BidAdjustment = 'BidAdjustment';

        /** This attribute reflects the current value of your ad group's audience targeting setting. */
        const TargetingSetting = 'TargetingSetting';

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

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The audience type. */
        const AudienceType = 'AudienceType';

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

        /** The Microsoft Advertising assigned identifier of the association between the audience and either an ad group or campaign. */
        const AssociationId = 'AssociationId';

        /** The level of the audience's association. */
        const AssociationLevel = 'AssociationLevel';

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

        /** The number of completed video views divided by the total number of impressions, multiplied by 100. */
        const VideoCompletionRate = 'VideoCompletionRate';

        /** Total amount of time a person spent watching the video in milliseconds. */
        const TotalWatchTimeInMS = 'TotalWatchTimeInMS';

        /** Total watch time divided by the number of video views. */
        const AverageWatchTimePerVideoView = 'AverageWatchTimePerVideoView';

        /** Total watch time, in milliseconds, divided by the number of impressions. */
        const AverageWatchTimePerImpression = 'AverageWatchTimePerImpression';

        /** Specifies the campaign objective, such as brand awareness, website visits, sales, leads, or app installs. */
        const MarketingObjective = 'MarketingObjective';

        /** Specifies the channels where ads can run. */
        const Channel = 'Channel';

        /** Optionally refines ad delivery within the selected channels. */
        const SubChannel = 'SubChannel';
    }

}
