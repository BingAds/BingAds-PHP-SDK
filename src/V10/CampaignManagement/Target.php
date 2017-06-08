<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the types of targeting that you can use to target your ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.100).aspx Target Data Object
     * 
     * @uses AgeTarget
     * @uses DayTimeTarget
     * @uses DeviceOSTarget
     * @uses KeyValuePairOfstringstring
     * @uses GenderTarget
     * @uses LocationTarget
     * @used-by AddTargetsToLibraryRequest
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by GetTargetsByIdsResponse
     * @used-by UpdateTargetsInLibraryRequest
     */
    final class Target
    {
        public $Age;
        public $DayTime;
        public $DeviceOS;
        public $ForwardCompatibilityMap;
        public $Gender;
        public $Id;
        public $IsLibraryTarget;
        public $Location;
        public $Name;
    }

}
