<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keyword list to campaign associations by negative keyword list IDs, or website exclusion list to ad account associations by website exclusion list IDs.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getsharedentityassociationsbysharedentityids?view=bingads-13 GetSharedEntityAssociationsBySharedEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsResponse
    {
        /**
         * An array of SharedEntityAssociation objects that corresponds directly to the shared entity identifiers that you specified in the request.
         * @var SharedEntityAssociation[]
         */
        public $Associations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
