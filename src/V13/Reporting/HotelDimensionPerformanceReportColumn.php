<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the HotelDimensionPerformanceReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/hoteldimensionperformancereportcolumn?view=bingads-13 HotelDimensionPerformanceReportColumn Value Set
     * 
     * @used-by HotelDimensionPerformanceReportRequest
     */
    final class HotelDimensionPerformanceReportColumn
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

        /** The identifier of the source hotel. */
        const SourceHotelId = 'SourceHotelId';

        /** The identifier of the lodging campaign. */
        const CampaignHotelId = 'CampaignHotelId';

        /** The Microsoft Advertising assigned identifier of an advertiser hotel. */
        const AdvertiserHotelId = 'AdvertiserHotelId';

        /** The name of the hotel. */
        const HotelName = 'HotelName';

        /** The name of the country where the hotel is located. */
        const CountryName = 'CountryName';

        /** The name of the state where the hotel is located. */
        const State = 'State';

        /** The city where the hotel is located. */
        const City = 'City';

        /** The hotel chain's brand. */
        const Brand = 'Brand';

        /** A user-defined category that identifies the type of hotel. */
        const Category = 'Category';

        /** The hotel's star rating. */
        const StarRating = 'StarRating';

        /** The value of the Custom_0 field in your Microsoft Hotel Center feed. */
        const CustomLabel0 = 'CustomLabel0';

        /** The value of the Custom_1 field in your Microsoft Hotel Center feed. */
        const CustomLabel1 = 'CustomLabel1';

        /** The value of the Custom_2 field in your Microsoft Hotel Center feed. */
        const CustomLabel2 = 'CustomLabel2';

        /** The value of the Custom_3 field in your Microsoft Hotel Center feed. */
        const CustomLabel3 = 'CustomLabel3';

        /** The value of the Custom_4 field in your Microsoft Hotel Center feed. */
        const CustomLabel4 = 'CustomLabel4';

        /** The bid strategy type. */
        const BidStrategyType = 'BidStrategyType';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The account currency type. */
        const CurrencyCode = 'CurrencyCode';

        /** Defines a key and value custom parameter for URL tracking. */
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

        /** The booked length of stay in number of days. */
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

        /** The check-in date and day of the week. */
        const CheckInDateDayOfWeek = 'CheckInDateDayOfWeek';

        /** The length of stay in nights. */
        const LengthOfStay = 'LengthOfStay';

        /** The number of days before the check-in date that the user is asking to book the hotel room. */
        const AdvancedBookingWindow = 'AdvancedBookingWindow';

        /** The Bing website that users used to search for hotels. */
        const SiteType = 'SiteType';

        /** The country of location for the user. */
        const UserCountry = 'UserCountry';

        /** The estimated percentage of clicks, out of the total number of clicks available, in auctions your ad showed in or was competitive in. */
        const ClickShare = 'ClickShare';

        /** Reserved. */
        const MissedImpressionsInsufficientBid = 'MissedImpressionsInsufficientBid';
    }

}
