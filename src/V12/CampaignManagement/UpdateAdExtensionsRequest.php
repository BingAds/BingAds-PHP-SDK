<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updateadextensions?view=bingads-12 UpdateAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsRequest
    {
        /**
         * The identifier of the account which contains the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type, to update within the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }
}
