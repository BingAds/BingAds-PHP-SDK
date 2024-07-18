<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified data exclusions associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyids?view=bingads-13 GetDataExclusionsByIds Response Object
     * 
     * @uses DataExclusion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByIds
     */
    final class GetDataExclusionsByIdsResponse
    {
        /**
         * A list of the specified data exclusions associated with the specified account.
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
