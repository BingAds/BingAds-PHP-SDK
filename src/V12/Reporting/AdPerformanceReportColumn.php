<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/adperformancereportcolumn?view=bingads-12 AdPerformanceReportColumn Value Set
     * 
     * @used-by AdPerformanceReportRequest
     */
    final class AdPerformanceReportColumn
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

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The Bing Ads assigned identifier of an ad group. */
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

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The ad display URL. */
        const DisplayUrl = 'DisplayUrl';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
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

        /** The Bing Ads assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The customer name. */
        const CustomerName = 'CustomerName';
    }

}
