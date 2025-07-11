<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AppsPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/appsperformancereportcolumn?view=bingads-13 AppsPerformanceReportColumn Value Set
     * 
     * @used-by AppsPerformanceReportRequest
     */
    final class AppsPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The Microsoft Advertising assigned identifier of an asset group. */
        const AssetGroupId = 'AssetGroupId';

        /** The asset group name. */
        const AssetGroupName = 'AssetGroupName';

        /** The asset group status. */
        const AssetGroupStatus = 'AssetGroupStatus';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The language of the publisher where the ad was shown. */
        const Language = 'Language';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** The name of the goal you set for the conversions you want, meaning actions customers take after clicking your ad. */
        const Goal = 'Goal';

        /** The type of conversion goal. */
        const GoalType = 'GoalType';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (Impressions). */
        const Ctr = 'Ctr';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The total advertising cost divided by the number of impressions (in thousands). */
        const AverageCpm = 'AverageCpm';

        /** The number of conversions. */
        const AllConversions = 'AllConversions';

        /** The cost per conversion. */
        const AllCostPerConversion = 'AllCostPerConversion';

        /** The conversion rate as a percentage. */
        const AllConversionRate = 'AllConversionRate';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** View-through conversions are conversions that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughConversions = 'ViewThroughConversions';

        /** The number of ad views, divided by the number of impressions. */
        const ViewThroughConversionRate = 'ViewThroughConversionRate';

        /** The cost per conversion that people make after they have seen your ad, even though they did not click the ad. */
        const ViewThroughCostPerConversion = 'ViewThroughCostPerConversion';

        /** The number of times customers download apps through your ads. */
        const Downloads = 'Downloads';

        /** The post-click download rate as a percentage. */
        const PostClickDownloadRate = 'PostClickDownloadRate';

        /** The average amount you're charged each time your ad is downloaded. */
        const CostPerDownload = 'CostPerDownload';

        /** The number of times customers install apps through your ads. */
        const AppInstalls = 'AppInstalls';

        /** The post-click install rate as a percentage. */
        const PostClickInstallRate = 'PostClickInstallRate';

        /** Cost per install. */
        const CPI = 'CPI';

        /** The number of times customers use your ads to make a purchase in your app. */
        const Purchases = 'Purchases';

        /** The post-install purchase rate as a percentage. */
        const PostInstallPurchaseRate = 'PostInstallPurchaseRate';

        /** Cost per in-app purchase. */
        const CPP = 'CPP';

        /** The number of times customers use your ads to purchase a subscription in your game. */
        const Subscriptions = 'Subscriptions';

        /** The post-install subscription rate as a percentage. */
        const PostInstallSubscriptionRate = 'PostInstallSubscriptionRate';

        /** Cost per in-app subscription. */
        const CPS = 'CPS';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The average amount of revenue made for each download. */
        const RevenuePerDownload = 'RevenuePerDownload';

        /** The average amount of revenue made for each install. */
        const RevenuePerAppInstall = 'RevenuePerAppInstall';
    }

}
