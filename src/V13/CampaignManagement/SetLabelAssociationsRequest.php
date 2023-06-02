<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setlabelassociations?view=bingads-13 SetLabelAssociations Request Object
     * 
     * @uses EntityType
     * @uses LabelAssociation
     * @used-by BingAdsCampaignManagementService::SetLabelAssociations
     */
    final class SetLabelAssociationsRequest
    {
        /**
         * Indicates the entity type associated with the label.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The list of label associations to set.
         * @var LabelAssociation[]
         */
        public $LabelAssociations;
    }
}
