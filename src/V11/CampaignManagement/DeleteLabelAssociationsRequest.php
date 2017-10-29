<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletelabelassociations?version=11 DeleteLabelAssociations Request Object
     * 
     * @uses EntityType
     * @uses LabelAssociation
     * @used-by BingAdsCampaignManagementService::DeleteLabelAssociations
     */
    final class DeleteLabelAssociationsRequest
    {
        /**
         * Indicates the entity type associated with the label.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The list of label associations to delete.
         * @var LabelAssociation[]
         */
        public $LabelAssociations;
    }
}
