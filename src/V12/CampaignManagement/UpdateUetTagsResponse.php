<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateuettags?view=bingads-12 UpdateUetTags Response Object
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
