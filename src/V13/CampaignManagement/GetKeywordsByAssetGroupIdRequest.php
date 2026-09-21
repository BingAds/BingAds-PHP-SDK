<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the keywords within an asset group.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/getkeywordsbyassetgroupid?view=bingads-13 GetKeywordsByAssetGroupId Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAssetGroupId
     */
    final class GetKeywordsByAssetGroupIdRequest
    {
        /**
         * The identifier of the asset group that keywords are returned for.
         * @var integer
         */
        public $AssetGroupId;

        /**
         * The list of additional properties that you want included within each returned keyword.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
