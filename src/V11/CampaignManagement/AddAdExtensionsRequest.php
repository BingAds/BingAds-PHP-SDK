<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addadextensions?version=11 AddAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsRequest
    {
        /**
         * The identifier of the account to add the extensions to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type to add to the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }
}
