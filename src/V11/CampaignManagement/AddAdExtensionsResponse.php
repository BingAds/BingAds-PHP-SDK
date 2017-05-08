<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.110).aspx AddAdExtensions Response Object
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
