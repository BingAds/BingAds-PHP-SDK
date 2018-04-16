<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyadgroupid?view=bingads-12 GetKeywordsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that keywords are returned for.
         * @var integer
         */
        public $AdGroupId;
    }
}
