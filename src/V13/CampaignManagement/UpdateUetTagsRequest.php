<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateuettags?view=bingads-13 UpdateUetTags Request Object
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
