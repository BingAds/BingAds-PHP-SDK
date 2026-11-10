<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates advertiser-settable properties of existing image media in an account's asset library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatemedia?view=bingads-13 UpdateMedia Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateMedia
     */
    final class UpdateMediaResponse
    {
        /**
         * An array of BatchError objects with details for media items that could not be updated.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
