<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
    final class DeleteTargetsFromLibraryRequest
    {
        /**
         * An array of long values that specifies the identifiers of the targets to remove from the target library.
         * @var integer[]
         */
        public $TargetIds;
    }
}
