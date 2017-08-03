<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.110).aspx UpdateAdExtensions Response Object
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
