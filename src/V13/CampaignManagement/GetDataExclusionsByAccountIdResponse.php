<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the data exclusions associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyaccountid?view=bingads-13 GetDataExclusionsByAccountId Response Object
     * 
     * @uses DataExclusion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByAccountId
     */
    final class GetDataExclusionsByAccountIdResponse
    {
        /**
         * A list of the data exclusions associated with the specified account.
         * @var DataExclusion[]
         */
        public $DataExclusions;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
