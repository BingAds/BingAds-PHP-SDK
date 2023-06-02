<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadextensions?view=bingads-13 DeleteAdExtensions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the extensions to delete.
         * @var integer[]
         */
        public $AdExtensionIds;
    }
}
