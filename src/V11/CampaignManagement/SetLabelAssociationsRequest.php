<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link http://msdn.microsoft.com/en-us/library/mt803283(v=msads.110).aspx SetLabelAssociations Request Object
     * 
     * @uses EntityType
     * @uses LabelAssociation
     * @used-by BingAdsCampaignManagementService::SetLabelAssociations
     */
    final class SetLabelAssociationsRequest
    {
        public $EntityType;
        public $LabelAssociations;
    }
}
