<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the BidStrategyReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/bidstrategyreportcolumn?view=bingads-13 BidStrategyReportColumn Value Set
     * 
     * @used-by BidStrategyReportRequest
     */
    final class BidStrategyReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The current account status */
        const AccountStatus = 'AccountStatus';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The current campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The bid strategy name. */
        const PortfolioBidStrategyName = 'PortfolioBidStrategyName';

        /** The current bid strategy status. */
        const PortfolioBidStrategyStatus = 'PortfolioBidStrategyStatus';

        /** In the account/campaign scope, the bid strategy type the campaign is using. */
        const BidStrategyType = 'BidStrategyType';

        /** In the account/portfolio scope, the current target CPA belonging to the account/portfolio. */
        const TargetCPA = 'TargetCPA';

        /** In the account/portfolio scope, the current target ROAS belonging to the account/portfolio. */
        const TargetRoas = 'TargetRoas';

        /** In the account/portfolio scope, the current target impression share belonging to the account/portfolio. */
        const TargetImpressionShare = 'TargetImpressionShare';

        /** In the account/portfolio scope, the number of campaigns belonging to the account/portfolio. */
        const NumOfCampaigns = 'NumOfCampaigns';

        /** In the account/portfolio scope, the maximum cost per click bid that was in effect at the time the report was generated. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** In the account/campaign scope,the target ad position type the campaign is using. */
        const TargetAdPositionType = 'TargetAdPositionType';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The number of conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The time gap between when a user clicks on an ad and when they complete a desired action, such as making a purchase, signing up, or downloading an app. */
        const ConversionDelay = 'ConversionDelay';

        /** The actual cost per conversion (CPC). */
        const CostPerConversionQualified = 'CostPerConversionQualified';

        /** The return on ad spend (ROAS). */
        const ROAS = 'ROAS';

        /** In the campaign/portfolio scope, calculate the historical daily target CPA as result. */
        const AvgTargetCPA = 'AvgTargetCPA';

        /** In the campaign/portfolio scope, calculate the historical daily target ROAS as result. */
        const AvgTargetRoas = 'AvgTargetRoas';

        /** In the campaign/portfolio scope, calculate the historical daily target impression share as result. */
        const AvgTargetImpressionShare = 'AvgTargetImpressionShare';

        /** The estimated percentage of impressions, out of the total available impressions in the market you were targeting. */
        const ImpressionSharePercent = 'ImpressionSharePercent';

        /** The bid strategy owner. */
        const Owner = 'Owner';

        /** Determines the time zone that is used to establish today's date. */
        const TimeZone = 'TimeZone';

        /** The currency of the bid strategy. */
        const Currency = 'Currency';

        /** Reserved. */
        const MarketingObjective = 'MarketingObjective';

        /** Reserved. */
        const Channel = 'Channel';

        /** Reserved. */
        const SubChannel = 'SubChannel';
    }

}
