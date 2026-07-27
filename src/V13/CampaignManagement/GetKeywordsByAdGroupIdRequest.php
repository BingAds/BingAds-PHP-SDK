<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyadgroupid?view=bingads-13 GetKeywordsByAdGroupId Request Object
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
