<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdDynamicTextPerformanceReportRequest Data Object.
     * @link https:/learn.microsoft.com/advertising/reporting-service/addynamictextperformancereportcolumn?view=bingads-13 AdDynamicTextPerformanceReportColumn Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     */
    final class AdDynamicTextPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad title. */
        const AdTitle = 'AdTitle';

        /** The ad type. */
        const AdType = 'AdType';

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The first dynamic substitution parameter (Param1) of a keyword or biddable ad group criterion. */
        const Param1 = 'Param1';

        /** The second dynamic substitution parameter (Param2) of a keyword or biddable ad group criterion. */
        const Param2 = 'Param2';

        /** The third dynamic substitution parameter (Param3) of a keyword or biddable ad group criterion. */
        const Param3 = 'Param3';

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

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The language of the publisher where the ad was shown. */
        const Language = 'Language';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The keyword status. */
        const KeywordStatus = 'KeywordStatus';

        /** The title part 1 attribute of an ad. */
        const TitlePart1 = 'TitlePart1';

        /** The title part 2 attribute of an ad. */
        const TitlePart2 = 'TitlePart2';

        /** The title part 3 attribute of an ad. */
        const TitlePart3 = 'TitlePart3';

        /** The path 1 attribute of an ad. */
        const Path1 = 'Path1';

        /** The path 2 attribute of an ad. */
        const Path2 = 'Path2';

        /** The Final URL of the ad, keyword, or criterion. */
        const FinalUrl = 'FinalUrl';

        /** The Final Mobile URL of the ad, keyword, or criterion. */
        const FinalMobileUrl = 'FinalMobileUrl';

        /** Reserved for future use. */
        const FinalAppUrl = 'FinalAppUrl';

        /** The first ad description that appears below the path in your ad. */
        const AdDescription = 'AdDescription';

        /** The second ad description that appears below the path in your ad. */
        const AdDescription2 = 'AdDescription2';

        /** The labels applied to the ad. */
        const AdLabels = 'AdLabels';

        /** The number of conversions. */
        const AllConversions = 'AllConversions';

        /** The conversion rate as a percentage. */
        const AllConversionRate = 'AllConversionRate';

        /** The cost per conversion. */
        const AllCostPerConversion = 'AllCostPerConversion';

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
    }

}
