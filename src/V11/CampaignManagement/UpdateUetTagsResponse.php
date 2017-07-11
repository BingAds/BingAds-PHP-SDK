<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759543(v=msads.110).aspx UpdateUetTags Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateUetTags
     */
    final class UpdateUetTagsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
