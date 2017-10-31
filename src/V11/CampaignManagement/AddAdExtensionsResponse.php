<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addadextensions?view=bingads-11 AddAdExtensions Response Object
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
