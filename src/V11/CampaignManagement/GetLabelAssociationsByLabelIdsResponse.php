<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets label associations by label identifiers.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getlabelassociationsbylabelids?version=11 GetLabelAssociationsByLabelIds Response Object
     * 
     * @uses LabelAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetLabelAssociationsByLabelIds
     */
    final class GetLabelAssociationsByLabelIdsResponse
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
