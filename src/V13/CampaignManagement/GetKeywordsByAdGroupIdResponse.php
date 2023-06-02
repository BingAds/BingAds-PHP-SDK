<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyadgroupid?view=bingads-13 GetKeywordsByAdGroupId Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdResponse
    {
        /**
         * An array of Keyword objects that represents the retrieved keywords.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
