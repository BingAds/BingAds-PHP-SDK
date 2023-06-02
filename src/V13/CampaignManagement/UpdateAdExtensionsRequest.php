<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updateadextensions?view=bingads-13 UpdateAdExtensions Request Object
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
