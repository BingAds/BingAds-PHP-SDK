<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the keywords within an asset group.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/getkeywordsbyassetgroupid?view=bingads-13 GetKeywordsByAssetGroupId Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAssetGroupId
     */
    final class GetKeywordsByAssetGroupIdResponse
    {
        /**
         * An array of Keyword objects that represents the retrieved keywords.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
