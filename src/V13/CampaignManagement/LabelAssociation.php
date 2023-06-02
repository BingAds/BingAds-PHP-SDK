<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the relationship between a label and campaign, ad group, ad, or keyword entity.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/labelassociation?view=bingads-13 LabelAssociation Data Object
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
