<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Removes the association between a negative keyword list and an entity such as a campaign.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletesharedentityassociations?view=bingads-13 DeleteSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsRequest
    {
        /**
         * An array of objects that associate a negative keyword list and an entity such as a campaign.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }
}
