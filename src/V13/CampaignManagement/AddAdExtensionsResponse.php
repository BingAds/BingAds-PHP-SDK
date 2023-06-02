<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addadextensions?view=bingads-13 AddAdExtensions Response Object
     * 
     * @uses AdExtensionIdentity
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsResponse
    {
        /**
         * The identities of the extensions that were added.
         * @var AdExtensionIdentity[]
         */
        public $AdExtensionIdentities;

        /**
         * An array of BatchErrorCollection objects that contain details for any ad extensions that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
