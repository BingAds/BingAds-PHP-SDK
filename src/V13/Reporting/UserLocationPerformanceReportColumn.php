<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the UserLocationPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/userlocationperformancereportcolumn?view=bingads-13 UserLocationPerformanceReportColumn Value Set
     * 
     * @used-by UserLocationPerformanceReportRequest
     */
    final class UserLocationPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The country where the user was physically located when they clicked the ad. */
        const Country = 'Country';

        /** The state where the user was physically located when they clicked the ad. */
        const State = 'State';

        /** The metro area (Nielsen DMA? in the United States) where the user was physically located when they clicked the ad. */
        const MetroArea = 'MetroArea';

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

        /** The radius target bid name. */
        const ProximityTargetLocation = 'ProximityTargetLocation';

        /** The radius of a radius target bid. */
        const Radius = 'Radius';

        /** The language of the country the ad is served in. */
        const Language = 'Language';

        /** The city where the user was physically located when they clicked the ad. */
        const City = 'City';

        /** The name of a country if the user's geographical intent can be determined. */
        const QueryIntentCountry = 'QueryIntentCountry';

        /** The name of a state if the user's geographical intent can be determined. */
        const QueryIntentState = 'QueryIntentState';

        /** The name of a city if the user's geographical intent can be determined. */
        const QueryIntentCity = 'QueryIntentCity';

        /** The name of a metro area (Nielsen DMA? in the United States) if the user's geographical intent can be determined. */
        const QueryIntentDMA = 'QueryIntentDMA';

        /** The keyword bid match type. */
        const BidMatchType = 'BidMatchType';

        /** The match type used to deliver an ad. */
        const DeliveredMatchType = 'DeliveredMatchType';

        /** The combined search advertising marketplace made up of Bing, AOL, Yahoo, and partner sites. */
        const Network = 'Network';

        /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. */
        const TopVsOther = 'TopVsOther';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The conversion rate as a percentage. */
        const ConversionRate = 'ConversionRate';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** The cost per conversion. */
        const CostPerConversion = 'CostPerConversion';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The revenue per conversion. */
        const RevenuePerConversion = 'RevenuePerConversion';

        /** The revenue per assist. */
        const RevenuePerAssist = 'RevenuePerAssist';

        /** The county where the user was physically located when they clicked the ad. */
        const County = 'County';

        /** The postal code where the user was physically located when they clicked the ad. */
        const PostalCode = 'PostalCode';

        /** The name of a county if the user's geographical intent can be determined. */
        const QueryIntentCounty = 'QueryIntentCounty';

        /** The name of a postal code if the user's geographical intent can be determined. */
        const QueryIntentPostalCode = 'QueryIntentPostalCode';

        /** The Microsoft Advertising identifier of the location where the user was physically located when they clicked the ad. */
        const LocationId = 'LocationId';

        /** The location identifier if the user's geographical intent can be determined. */
        const QueryIntentLocationId = 'QueryIntentLocationId';

        /** The number of conversions. */
        const AllConversions = 'AllConversions';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const AllRevenue = 'AllRevenue';

        /** The conversion rate as a percentage. */
        const AllConversionRate = 'AllConversionRate';

        /** The cost per conversion. */
        const AllCostPerConversion = 'AllCostPerConversion';

        /** The return on ad spend (ROAS). */
        const AllReturnOnAdSpend = 'AllReturnOnAdSpend';

        /** The revenue per conversion. */
        const AllRevenuePerConversion = 'AllRevenuePerConversion';
    }

}
