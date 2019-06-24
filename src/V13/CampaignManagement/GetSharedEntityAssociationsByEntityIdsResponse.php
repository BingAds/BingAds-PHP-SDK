<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets negative keyword list associations for the specified campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getsharedentityassociationsbyentityids?view=bingads-13 GetSharedEntityAssociationsByEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsResponse
    {
        /**
         * An array of SharedEntityAssociation objects that corresponds directly to the entity identifiers that you specified in the request.
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
