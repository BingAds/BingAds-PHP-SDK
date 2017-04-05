<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the SitePerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dd797115(v=msads.90).aspx SitePerformanceReportColumn Value Set
     * 
     * @used-by SitePerformanceReportRequest
     */
    final class SitePerformanceReportColumn
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

        /** The URL of the website that displayed the ad. */
        const Site = 'Site';

        /** The Bing Ads assigned identifier of a site placement. */
        const SiteId = 'SiteId';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

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

        /** The ad type. */
        const AdType = 'AdType';

        /** The average of the cost-per-thousand impressions of the ads. */
        const AverageCpm = 'AverageCpm';

        /** The ad group's pricing model. */
        const PricingModel = 'PricingModel';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The ad group language. */
        const Language = 'Language';

        /** The current TrackingUrlTemplate element of the Ad, Keyword, or BiddableAdGroupCriterion. */
        const TrackingTemplate = 'TrackingTemplate';

        /** The current UrlCustomParameters element of the Ad, Keyword, or BiddableAdGroupCriterion. */
        const CustomParameters = 'CustomParameters';

        /** The FinalUrls element of the Ad, Keyword, or BiddableAdGroupCriterion. */
        const FinalURL = 'FinalURL';

        /** The FinalMobileUrls element of the Ad, Keyword, or BiddableAdGroupCriterion. */
        const FinalMobileURL = 'FinalMobileURL';

        /** Reserved for future use. */
        const FinalAppURL = 'FinalAppURL';

        /** The account lifecycle status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The ad status. */
        const AdStatus = 'AdStatus';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';
    }

}
