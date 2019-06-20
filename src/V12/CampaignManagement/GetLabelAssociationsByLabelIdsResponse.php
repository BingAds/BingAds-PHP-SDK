<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets label associations by label identifiers.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getlabelassociationsbylabelids?view=bingads-12 GetLabelAssociationsByLabelIds Response Object
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
