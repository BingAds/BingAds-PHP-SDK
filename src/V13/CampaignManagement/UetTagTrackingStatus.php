<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible system-determined status values of a UET tag.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/uettagtrackingstatus?view=bingads-13 UetTagTrackingStatus Value Set
     * 
     * @used-by UetTag
     */
    final class UetTagTrackingStatus
    {
        /** Microsoft Advertising hasn't received any user activity data from the UET tag on your website. */
        const Unverified = 'Unverified';

        /** Your UET tag is working and sending user activity data to Microsoft Advertising. */
        const Active = 'Active';

        /** Microsoft Advertising has not received any user activity data from the UET tag in the last 24 hours. */
        const Inactive = 'Inactive';
    }

}
