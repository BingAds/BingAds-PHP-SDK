<?php

namespace Microsoft\BingAds\V12\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdDynamicTextPerformanceReportRequest Data Object.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/addynamictextperformancereportcolumn?view=bingads-12 AdDynamicTextPerformanceReportColumn Value Set
     * 
     * @used-by AdDynamicTextPerformanceReportRequest
     */
    final class AdDynamicTextPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The Bing Ads assigned identifier of an ad. */
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

        /** The language of the country the ad is served in. */
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
    }

}
