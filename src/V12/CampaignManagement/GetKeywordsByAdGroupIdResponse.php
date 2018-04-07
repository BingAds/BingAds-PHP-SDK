<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyadgroupid?view=bingads-12 GetKeywordsByAdGroupId Response Object
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
