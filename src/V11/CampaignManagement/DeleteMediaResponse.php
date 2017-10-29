<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes the specified media from an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletemedia?version=11 DeleteMedia Response Object
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
