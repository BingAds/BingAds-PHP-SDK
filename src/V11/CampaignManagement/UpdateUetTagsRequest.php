<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateuettags?view=bingads-11 UpdateUetTags Request Object
     * 
     * @uses UetTag
     * @used-by BingAdsCampaignManagementService::UpdateUetTags
     */
    final class UpdateUetTagsRequest
    {
        /**
         * An array of UetTag objects to update within the customer's shared UET tag library.
         * @var UetTag[]
         */
        public $UetTags;
    }
}
