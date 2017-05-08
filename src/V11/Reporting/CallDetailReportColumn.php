<?php
// Generated on 5/7/2017 5:48:05 AM

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines the attributes and performance statistics columns that you can include in the CallDetailReportRequest.
     * @link http://msdn.microsoft.com/en-us/library/dn195843(v=msads.110).aspx CallDetailReportColumn Value Set
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

        /** The start time of the call. */
        const StartTime = 'StartTime';

        /** The end time of the call. */
        const EndTime = 'EndTime';

        /** The duration of each forwarded call that originated from a call ad extension. */
        const Duration = 'Duration';

        /** The call status. */
        const CallStatus = 'CallStatus';

        /** The name of the call type. */
        const CallTypeName = 'CallTypeName';

        /** The area code where the user was physically located when they clicked the ad. */
        const AreaCode = 'AreaCode';

        /** The city used to deliver the ad. */
        const City = 'City';

        /** The state used to deliver the ad. */
        const State = 'State';

        /** The Bing Ads assigned identifier of an account. */
        const AccountId = 'AccountId';

        /** The Bing Ads assigned identifier of a campaign. */
        const CampaignId = 'CampaignId';

        /** The Bing Ads assigned identifier of an ad group. */
        const AdGroupId = 'AdGroupId';

        /** The account status. */
        const AccountStatus = 'AccountStatus';

        /** The campaign status. */
        const CampaignStatus = 'CampaignStatus';

        /** The ad group status. */
        const AdGroupStatus = 'AdGroupStatus';
    }

}
