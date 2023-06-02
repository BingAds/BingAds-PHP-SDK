<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more ads from the specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteads?view=bingads-13 DeleteAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
