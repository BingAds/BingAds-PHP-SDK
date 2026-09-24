<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the SearchTermLandingPageReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/searchtermlandingpagereportcolumn?view=bingads-13 SearchTermLandingPageReportColumn Value Set
     * 
     * @used-by SearchTermLandingPageReportRequest
     */
    final class SearchTermLandingPageReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising-assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising-assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising-assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The Microsoft Advertising-assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad type. */
        const AdType = 'AdType';

        /** The campaign type, for example Search, DynamicSearchAds, or PerformanceMax. */
        const CampaignType = 'CampaignType';

        /** The display language of the search term. */
        const Language = 'Language';

        /** The search term (query) that matched and caused the ad to be delivered. */
        const SearchQuery = 'SearchQuery';

        /** The keyword text that matched the search term. */
        const Keyword = 'Keyword';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver the ad, which can differ from the bid match type. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The headlines delivered for the impression, returned as a pipe-delimited string in the format `h1\ */
        const Headline = 'Headline';

        /** The landing page URL (Final URL) that the user was sent to for the impression. */
        const FinalUrl = 'FinalUrl';

        /** The source of the Final URL. */
        const FinalUrlSource = 'FinalUrlSource';

        /** The number of times the ad was displayed. */
        const Impressions = 'Impressions';

        /** The number of clicks. */
        const Clicks = 'Clicks';

        /** The click-through rate as a percentage, calculated as Clicks divided by Impressions. */
        const Ctr = 'Ctr';

        /** The average cost per click, calculated as Spend divided by Clicks. */
        const AverageCpc = 'AverageCpc';

        /** The cost per impression (CPM) and cost per click (CPC) summed for the time period. */
        const Spend = 'Spend';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage, calculated as Conversions divided by Clicks. */
        const ConversionRate = 'ConversionRate';

        /** The cost per conversion, calculated as Spend divided by Conversions. */
        const CostPerConversion = 'CostPerConversion';

        /** How often the ad was shown in the first (absolute top) position, as a percentage of total impressions. */
        const AbsoluteTopImpressionRatePercent = 'AbsoluteTopImpressionRatePercent';

        /** How often the ad was shown at the top of the search results (above the organic results), as a percentage of total impressions. */
        const TopImpressionRatePercent = 'TopImpressionRatePercent';

        /** The advertiser-reported revenue attributed to conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS), calculated as Revenue divided by Spend. */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The time period of the report row. */
        const TimePeriod = 'TimePeriod';

        /** The number of qualified conversions. */
        const ConversionsQualified = 'ConversionsQualified';

        /** Specifies the campaign objective, such as brand awareness, website visits, sales, leads, or app installs. */
        const MarketingObjective = 'MarketingObjective';

        /** Specifies the channels where ads can run. */
        const Channel = 'Channel';

        /** Optionally refines ad delivery within the selected channels. */
        const SubChannel = 'SubChannel';

        /** Reserved. */
        const HeadlineSource = 'HeadlineSource';
    }

}
