<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the HotelGroupPerformanceReportRequest.
     * @link https://docs.microsoft.com/en-us/advertising/reporting-service/hotelgroupperformancereportcolumn?view=bingads-13 HotelGroupPerformanceReportColumn Value Set
     * 
     * @used-by HotelGroupPerformanceReportRequest
     */
    final class HotelGroupPerformanceReportColumn
    {
        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Microsoft Advertising assigned identifier of a customer. */
        const CustomerId = 'CustomerId';

        /** The name of the customer. */
        const CustomerName = 'CustomerName';

        /** The account name. */
        const AccountName = 'AccountName';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Microsoft Advertising assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** A group of hotel ads. */
        const HotelGroup = 'HotelGroup';

        /** The identifier for a hotel group. */
        const HotelGroupNodeId = 'HotelGroupNodeId';

        /** The type of hotel partition, for example Subdivision or Unit. */
        const PartitionType = 'PartitionType';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** The current custom parameter set of the criterion. */
        const CustomParameters = 'CustomParameters';

        /** The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL. */
        const FinalUrlSuffix = 'FinalUrlSuffix';

        /** The number of times an ad has been displayed on search results pages. */
        const Impressions = 'Impressions';

        /** Clicks are what you pay for. */
        const Clicks = 'Clicks';

        /** The click-through rate (CTR) is the number of times an ad was clicked, divided by the number of times the ad was shown (impressions). */
        const Ctr = 'Ctr';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The average cost per click (CPC). */
        const AverageCpc = 'AverageCpc';

        /** The total advertising cost divided by the number of impressions (in thousands). */
        const AverageCpm = 'AverageCpm';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The net revenue. */
        const NetRevenue = 'NetRevenue';

        /** The gross return on ad spend. */
        const GrossReturnOnAdSpend = 'GrossReturnOnAdSpend';

        /** The net return on ad spend. */
        const NetReturnOnAdSpend = 'NetReturnOnAdSpend';

        /** The cost per assist. */
        const CostPerAssist = 'CostPerAssist';

        /** The booked length of stay in number of nights. */
        const BookedLengthOfStay = 'BookedLengthOfStay';

        /** The average advanced booking window for the hotel. */
        const AvgBookedABW = 'AvgBookedABW';

        /** The average nights booked for the hotel. */
        const AvgBookedNights = 'AvgBookedNights';

        /** The total advanced booking window days for the hotel. */
        const BookedABW = 'BookedABW';

        /** The check-in date. */
        const CheckInDate = 'CheckInDate';

        /** Indicates whether the user searched for hotels using specific dates. */
        const DateType = 'DateType';

        /** The number of times an ad has been displayed on search results pages on our partner networks. */
        const PartnerImpressions = 'PartnerImpressions';

        /** The total number of realized and unrealized impressions (impressions plus missed impressions). */
        const EligibleImpressions = 'EligibleImpressions';

        /** The total number of impressions lost. */
        const MissedImpressions = 'MissedImpressions';

        /** The percentage of impressions, out of the total available impressions in the market you were targeting. */
        const ImpressionShare = 'ImpressionShare';

        /** The number of impressions lost because there were no bids. */
        const MissedImpressionsNoBid = 'MissedImpressionsNoBid';

        /** The number of impressions lost because you reached your daily spending limit. */
        const MissedImpressionsSpendingCapReached = 'MissedImpressionsSpendingCapReached';

        /** The number of impressions lost because the hotel didn't specify taxes. */
        const MissedImpressionsNoTax = 'MissedImpressionsNoTax';

        /** The number of impressions lost for all other reasons. */
        const MissedImpressionsOther = 'MissedImpressionsOther';
    }

}
