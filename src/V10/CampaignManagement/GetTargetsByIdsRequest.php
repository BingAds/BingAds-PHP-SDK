<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsRequest
    {
        /**
         * A list of identifiers of the targets to get.
         * @var integer[]
         */
        public $TargetIds;
    }
}
