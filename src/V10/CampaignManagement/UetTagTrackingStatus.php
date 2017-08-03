<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the possible system-determined status values of a UET tag.
     * @link http://msdn.microsoft.com/en-us/library/mt759560(v=msads.100).aspx UetTagTrackingStatus Value Set
     * 
     * @used-by UetTag
     */
    final class UetTagTrackingStatus
    {
        const Unverified = 'Unverified';
        const Active = 'Active';
        const Inactive = 'Inactive';
    }

}
