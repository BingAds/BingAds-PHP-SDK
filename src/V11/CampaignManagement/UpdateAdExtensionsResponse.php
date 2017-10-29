<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updateadextensions?version=11 UpdateAdExtensions Response Object
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
