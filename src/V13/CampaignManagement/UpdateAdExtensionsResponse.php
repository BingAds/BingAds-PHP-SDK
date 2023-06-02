<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateadextensions?view=bingads-13 UpdateAdExtensions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any ad extensions that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
