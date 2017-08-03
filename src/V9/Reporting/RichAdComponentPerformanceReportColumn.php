<?php

namespace Microsoft\BingAds\V9\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the RichAdComponentPerformanceReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/hh180149(v=msads.90).aspx RichAdComponentPerformanceReportColumn Value Set
     * 
     * @used-by RichAdComponentPerformanceReportRequest
     */
    final class RichAdComponentPerformanceReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The Bing Ads assigned number of an account. */
        const AccountNumber = 'AccountNumber';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The time period of each report row. */
        const TimePeriod = 'TimePeriod';

        /** The Bing Ads assigned identifier of an ad. */
        const AdId = 'AdId';

        /** The ad title. */
        const AdTitle = 'AdTitle';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The rich ad component type. */
        const RichAdSubType = 'RichAdSubType';

        /** The component type of the rich ad that was clicked. */
        const ComponentType = 'ComponentType';

        /** The title of the rich ad component. */
        const ComponentTitle = 'ComponentTitle';

        /** The destination URL of the rich ad component. */
        const ComponentDestinationURL = 'ComponentDestinationURL';

        /** The number of billable clicks of a rich ad. */
        const ComponentClicks = 'ComponentClicks';

        /** The number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. */
        const ComponentNonBillableClicks = 'ComponentNonBillableClicks';

        /** The number of times that all components of the ad were clicked. */
        const ComponentTotalClicks = 'ComponentTotalClicks';

        /** The click-through rate of all components of the ad that were clicked. */
        const ComponentCTR = 'ComponentCTR';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';

        /** The ad status. */
        const AdStatus = 'AdStatus';
    }

}
