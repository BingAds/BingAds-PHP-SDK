<?php
// Generated on 5/7/2017 5:45:54 AM

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the GoalsAndFunnelsReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/gg262845(v=msads.90).aspx GoalsAndFunnelsReportColumn Value Set
     * 
     * @used-by GoalsAndFunnelsReportRequest
     */
    final class GoalsAndFunnelsReportColumn
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

        /** The name of your event tracking or campaign analytics goal. */
        const Goal = 'Goal';

        /** The number of times that a user entered step 1 of the funnel. */
        const Step1Count = 'Step1Count';

        /** The number of times that a user entered step 2 of the funnel. */
        const Step2Count = 'Step2Count';

        /** The number of times that a user entered step 3 of the funnel. */
        const Step3Count = 'Step3Count';

        /** The number of times that a user entered step 4 of the funnel. */
        const Step4Count = 'Step4Count';

        /** The number of times that a user entered step 5 of the funnel. */
        const Step5Count = 'Step5Count';

        /** The number of conversions. */
        const Conversions = 'Conversions';

        /** The number of conversions from other ads within the same account that were preceded by one or more clicks from this ad. */
        const Assists = 'Assists';

        /** The funnel conversion rate is the percent of conversions completed by users who at minimum visited the webpage corresponding to step 1 of your goal. */
        const FunnelConversionRate = 'FunnelConversionRate';

        /** The cost per click (CPC) summed for each click. */
        const Spend = 'Spend';

        /** The revenue optionally reported by the advertiser as a result of conversions. */
        const Revenue = 'Revenue';

        /** The return on ad spend (ROAS). */
        const ReturnOnAdSpend = 'ReturnOnAdSpend';

        /** Cost information that is optionally provided by advertisers, including non-advertising costs, taxes, and shipping. */
        const ExtendedCost = 'ExtendedCost';

        /** The Bing Ads assigned identifier of a goal. */
        const GoalId = 'GoalId';

        /** The device name attribute of a device OS target bid. */
        const DeviceType = 'DeviceType';

        /** The operating system of the device reported in the DeviceType column. */
        const DeviceOS = 'DeviceOS';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The keyword status. */
        const KeywordStatus = 'KeywordStatus';
    }

}
