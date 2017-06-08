<?php
// Generated on 6/7/2017 5:55:20 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the KeywordPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb672087(v=msads.110).aspx KeywordPerformanceReportColumn Value Set
     * 
     * @used-by KeywordPerformanceReportRequest
     * @used-by KeywordPerformanceReportSort
     */
    final class KeywordPerformanceReportColumn
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

        /** The keyword text. */
        const Keyword = 'Keyword';

        /** The Bing Ads assigned identifier of a keyword. */
        const KeywordId = 'KeywordId';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad type. */
        const AdType = 'AdType';

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The maximum cost per click. */
        const CurrentMaxCpc = 'CurrentMaxCpc';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The ad distribution attribute of an ad group. */
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

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** How well your keyword competes against other keywords targeting the same traffic. */
        const ExpectedCtr = 'ExpectedCtr';

        /** How closely related your ads is to the customer's search query or other input. */
        const AdRelevance = 'AdRelevance';

        /** An aggregate quality assessment of all landing pages on your site. */
        const LandingPageExperience = 'LandingPageExperience';

        /** The ad group language. */
        const Language = 'Language';

        /** The historic quality score of the keyword. */
        const HistoricQualityScore = 'HistoricQualityScore';

        /** Historic average of expected click-through rate scores going back as far as 18 months from the current date. */
        const HistoricExpectedCtr = 'HistoricExpectedCtr';

        /** Historic average of ad relevance scores back as far as 18 months from the current date. */
        const HistoricAdRelevance = 'HistoricAdRelevance';

        /** Historic average of landing page experience scores back as far as 18 months from the current date. */
        const HistoricLandingPageExperience = 'HistoricLandingPageExperience';

        /** The numeric score that indicates the possible increase in the number of impressions that the keyword could receive if the corresponding QualityScore column would rise above underperforming: 0 - Not available. */
        const QualityImpact = 'QualityImpact';

        /** Reserved for internal use. */
        const BusinessListingId = 'BusinessListingId';

        /** Reserved for internal use. */
        const BusinessListingName = 'BusinessListingName';

        /** Reserved for internal use. */
        const BusinessCategoryId = 'BusinessCategoryId';

        /** Reserved for internal use. */
        const BusinessCategoryName = 'BusinessCategoryName';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The keyword status. */
        const KeywordStatus = 'KeywordStatus';

        /** The current network setting of an ad group. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

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

        /** The current tracking template of the keyword. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current custom parameter set of the keyword. */
        const CustomParameters = 'CustomParameters';

        /** The Final URL of the keyword. */
        const FinalURL = 'FinalURL';

        /** The Final Mobile URL of the keyword. */
        const FinalMobileURL = 'FinalMobileURL';

        /** Reserved for future use. */
        const FinalAppURL = 'FinalAppURL';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';
    }

}
