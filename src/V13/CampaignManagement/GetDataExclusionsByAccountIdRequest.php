<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the data exclusions associated with an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdataexclusionsbyaccountid?view=bingads-13 GetDataExclusionsByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetDataExclusionsByAccountId
     */
    final class GetDataExclusionsByAccountIdRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;
    }
}
