<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves detailed information about all the targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Response Object
     * 
     * @uses TargetInfo
     * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
     */
    final class GetTargetsInfoFromLibraryResponse
    {
        /**
         * An array of TargetInfo objects that contain information about the targets in your library.
         * @var TargetInfo[]
         */
        public $TargetsInfo;
    }
}
