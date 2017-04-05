<?php
// Generated on 12/5/2016 5:47:09 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the AdPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/bb671923(v=msads.90).aspx AdPerformanceReportColumn Value Set
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

        /** The text attribute of an ad. */
        const AdDescription = 'AdDescription';

        /** The ad type. */
        const AdType = 'AdType';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

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

        /** The destination URL attribute of the ad, keyword, or ad group criterion. */
        const DestinationUrl = 'DestinationUrl';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The ad group language. */
        const Language = 'Language';

        /** The ad display URL. */
        const DisplayUrl = 'DisplayUrl';

        /** Reserved for internal use. */
        const BusinessListingId = 'BusinessListingId';

        /** Reserved for internal use. */
        const BusinessListingName = 'BusinessListingName';

        /** Reserved for internal use. */
        const BusinessCategoryId = 'BusinessCategoryId';

        /** Reserved for internal use. */
        const BusinessCategoryName = 'BusinessCategoryName';

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

        /** The title part 1 attribute of an ad. */
        const TitlePart1 = 'TitlePart1';

        /** The title part 2 attribute of an ad. */
        const TitlePart2 = 'TitlePart2';

        /** The path 1 attribute of an ad. */
        const Path1 = 'Path1';

        /** The path 2 attribute of an ad. */
        const Path2 = 'Path2';
    }

}
