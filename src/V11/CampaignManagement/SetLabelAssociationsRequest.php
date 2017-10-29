<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setlabelassociations?version=11 SetLabelAssociations Request Object
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
