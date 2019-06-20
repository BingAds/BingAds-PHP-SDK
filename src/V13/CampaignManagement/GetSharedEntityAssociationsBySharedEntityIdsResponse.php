<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets shared entity associations for the specified negative keyword lists.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentityassociationsbysharedentityids?view=bingads-13 GetSharedEntityAssociationsBySharedEntityIds Response Object
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
