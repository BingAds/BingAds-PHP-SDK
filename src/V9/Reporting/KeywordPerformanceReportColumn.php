<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the KeywordPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb672087(v=msads.90).aspx KeywordPerformanceReportColumn Value Set
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

        /** The number of times that the ads in the account were clicked. */
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

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The ad group's pricing model. */
        const PricingModel = 'PricingModel';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The numeric score shows you how competitive your ads are in the marketplace by measuring how relevant your keywords and landing pages are to customers' search terms. */
        const QualityScore = 'QualityScore';

        /** A numeric score that indicates how likely your ads will be clicked and how well your keyword competes against other keywords targeting the same traffic. */
        const KeywordRelevance = 'KeywordRelevance';

        /** A numeric score that indicates how relevant your ad and landing page are to the customer's search query or other input. */
        const LandingPageRelevance = 'LandingPageRelevance';

        /** A numeric score that indicates whether your landing page is likely to provide a good experience to customers who click your ad and land on your website. */
        const LandingPageUserExperience = 'LandingPageUserExperience';

        /** The ad group language. */
        const Language = 'Language';

        /** The historic quality score of the keyword. */
        const HistoricQualityScore = 'HistoricQualityScore';

        /** The numeric score that indicates the historic relevance of your keyword to the search term. */
        const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

        /** The numeric score that indicates the historic relevance of your ad and landing page to the search term. */
        const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

        /** The numeric score that is the aggregate assessment of the historic quality of all landing pages on your site. */
        const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

        /** An identifier that uniquely identifies the keyword and match-type combination. */
        const KeywordMatchTypeId = 'KeywordMatchTypeId';

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

        /** The account lifecycle status. */
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

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

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

        /** The percentage of website visitors who only view one page (the landing page) and then leave your website. */
        const BounceRate = 'BounceRate';

        /** The total number of times customers visited your site. */
        const TotalVisits = 'TotalVisits';

        /** The average number of pages each customer goes to while on your site. */
        const AveragePagesPerVisit = 'AveragePagesPerVisit';

        /** The sum total of the time customers spent browsing your site divided by the number of customers that visited your site. */
        const AverageDurationPerVisit = 'AverageDurationPerVisit';

        /** The current TrackingUrlTemplate element of the Keyword. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current UrlCustomParameters element of the Keyword. */
        const CustomParameters = 'CustomParameters';

        /** The FinalUrls element of the Keyword. */
        const FinalURL = 'FinalURL';

        /** The FinalMobileUrls element of the Keyword. */
        const FinalMobileURL = 'FinalMobileURL';

        /** Reserved for future use. */
        const FinalAppURL = 'FinalAppURL';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';
    }

}
