<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Response Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsResponse
    {
        /**
         * An array of Target objects that contains information about the specified targets.
         * @var Target[]
         */
        public $Targets;
    }
}
