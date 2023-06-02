<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the negative keyword list to campaign associations, or website exclusion list to ad account associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletesharedentityassociations?view=bingads-13 DeleteSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsRequest
    {
        /**
         * The list of negative keyword list to campaign associations, or website exclusion list to ad account associations.
         * @var SharedEntityAssociation[]
         */
        public $Associations;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
