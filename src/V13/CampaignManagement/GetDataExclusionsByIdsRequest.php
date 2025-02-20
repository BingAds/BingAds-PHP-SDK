<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified data exclusions associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyids?view=bingads-13 GetDataExclusionsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByIds
     */
    final class GetDataExclusionsByIdsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The data exclusion IDs.
         * @var integer[]
         */
        public $DataExclusionIds;
    }
}
