<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified media from an account's media library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletemedia?view=bingads-13 DeleteMedia Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaResponse
    {
        /**
         * An array of BatchError objects that contain details for any media that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
