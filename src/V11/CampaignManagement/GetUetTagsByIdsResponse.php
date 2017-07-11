<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759542(v=msads.110).aspx GetUetTagsByIds Response Object
     * 
     * @uses UetTag
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetUetTagsByIds
     */
    final class GetUetTagsByIdsResponse
    {
        /**
         * An array of UetTag objects that corresponds directly to the UET tag identifiers that you specified in the request.
         * @var UetTag[]
         */
        public $UetTags;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
