<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible system-determined status values of a UET tag.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/uettagtrackingstatus?view=bingads-11 UetTagTrackingStatus Value Set
     * 
     * @used-by UetTag
     */
    final class UetTagTrackingStatus
    {
        /** Bing Ads hasn't received any user activity data from the UET tag on your website. */
        const Unverified = 'Unverified';

        /** Your UET tag is working and sending user activity data to Bing Ads. */
        const Active = 'Active';

        /** Bing Ads has not received any user activity data from the UET tag in the last 24 hours. */
        const Inactive = 'Inactive';
    }

}
