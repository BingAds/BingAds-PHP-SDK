<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getkeywordsbyadgroupid?view=bingads-12 GetKeywordsByAdGroupId Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that keywords are returned for.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of additional properties that you want included within each returned keyword.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
