<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelabelassociations?view=bingads-13 DeleteLabelAssociations Request Object
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
