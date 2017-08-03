<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the relationship between a label and campaign, ad group, ad, or keyword entity.
     * @link http://msdn.microsoft.com/en-us/library/mt803292(v=msads.110).aspx LabelAssociation Data Object
     * 
     * @used-by DeleteLabelAssociationsRequest
     * @used-by GetLabelAssociationsByEntityIdsResponse
     * @used-by GetLabelAssociationsByLabelIdsResponse
     * @used-by SetLabelAssociationsRequest
     */
    final class LabelAssociation
    {
        /**
         * The identifier of an entity associated with the label.
         * @var integer
         */
        public $EntityId;

        /**
         * The identifier of the label.
         * @var integer
         */
        public $LabelId;
    }

}
