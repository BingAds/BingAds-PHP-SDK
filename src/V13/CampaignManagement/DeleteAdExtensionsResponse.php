<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadextensions?view=bingads-13 DeleteAdExtensions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
