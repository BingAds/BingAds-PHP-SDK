<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by entity identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getlabelassociationsbyentityids?view=bingads-11 GetLabelAssociationsByEntityIds Response Object
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
