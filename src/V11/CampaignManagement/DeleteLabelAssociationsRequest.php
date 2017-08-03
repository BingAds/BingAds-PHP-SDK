<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes label associations.
     * @link http://msdn.microsoft.com/en-us/library/mt803288(v=msads.110).aspx DeleteLabelAssociations Request Object
     * 
     * @uses EntityType
     * @uses LabelAssociation
     * @used-by BingAdsCampaignManagementService::DeleteLabelAssociations
     */
    final class DeleteLabelAssociationsRequest
    {
        public $EntityType;
        public $LabelAssociations;
    }
}
