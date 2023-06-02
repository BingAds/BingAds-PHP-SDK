<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlabelassociationsbyentityids?view=bingads-13 GetLabelAssociationsByEntityIds Response Object
     * 
     * @uses LabelAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByEntityIds
     */
    final class GetLabelAssociationsByEntityIdsResponse
    {
        /**
         * An array of label associations.
         * @var LabelAssociation[]
         */
        public $LabelAssociations;

        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
