<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves detailed information about the targets that are associated with the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Response Object
     * 
     * @uses BatchError
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
     */
    final class GetTargetsByCampaignIdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * An array of Target that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Target[]
         */
        public $Targets;
    }
}
