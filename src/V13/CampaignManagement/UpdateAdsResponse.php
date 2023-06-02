<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the specified ads within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateads?view=bingads-13 UpdateAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
