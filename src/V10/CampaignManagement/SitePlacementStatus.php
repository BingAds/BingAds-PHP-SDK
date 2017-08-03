<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the status of a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.100).aspx SitePlacementStatus Value Set
     * 
     * @used-by SitePlacement
     */
    final class SitePlacementStatus
    {
        const Active = 'Active';
        const Paused = 'Paused';
        const Deleted = 'Deleted';
        const Inactive = 'Inactive';
    }

}
