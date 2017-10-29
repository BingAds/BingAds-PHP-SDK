<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the keywords within an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyadgroupid?version=11 GetKeywordsByAdGroupId Response Object
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
