<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getuettagsbyids?view=bingads-13 GetUetTagsByIds Response Object
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
