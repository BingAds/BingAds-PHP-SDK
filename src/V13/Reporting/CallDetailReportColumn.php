<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CallDetailReportRequest.
     * @link https:/learn.microsoft.com/advertising/reporting-service/calldetailreportcolumn?view=bingads-13 CallDetailReportColumn Value Set
     * 
     * @used-by CallDetailReportRequest
     */
    final class CallDetailReportColumn
    {
        /** The account name. */
        const AccountName = 'AccountName';

        /** The campaign name. */
        const CampaignName = 'CampaignName';

        /** The ad group name. */
        const AdGroupName = 'AdGroupName';

        /** The start time of the call expressed in Coordinated Universal Time (UTC). */
        const StartTime = 'StartTime';

        /** The end time of the call expressed in Coordinated Universal Time (UTC). */
        const EndTime = 'EndTime';

        /** The duration of each forwarded call that originated from a call ad extension. */
        const Duration = 'Duration';

        /** The area code where the user was physically located when they clicked the ad. */
        const AreaCode = 'AreaCode';

        /** The city used to deliver the ad. */
        const City = 'City';

        /** The state used to deliver the ad. */
        const State = 'State';

        /** The Microsoft Advertising assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Microsoft Advertising assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The Microsoft Advertising assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}
