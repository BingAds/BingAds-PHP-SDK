<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
     */
    final class UpdateTargetsInLibraryRequest
    {
        /**
         * An array of Target objects that contains the updated target information.
         * @var Target[]
         */
        public $Targets;
    }
}
