<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more campaign criterions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatecampaigncriterions?view=bingads-13 UpdateCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
