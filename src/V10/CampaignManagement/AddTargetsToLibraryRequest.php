<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds targets to your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.100).aspx AddTargetsToLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
     */
    final class AddTargetsToLibraryRequest
    {
        /**
         * An array of Target objects to add to the target library.
         * @var Target[]
         */
        public $Targets;
    }
}
