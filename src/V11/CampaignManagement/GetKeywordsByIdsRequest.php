<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the specified keywords.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyids?view=bingads-11 GetKeywordsByIds Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsRequest
    {
        /**
         * The identifier of the ad group whose keywords you want to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 1,000 identifiers of the keywords to get.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * The list of additional properties that you want included within each returned Keyword object.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
