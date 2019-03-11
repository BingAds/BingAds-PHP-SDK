<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getkeywordsbyeditorialstatus?view=bingads-12 GetKeywordsByEditorialStatus Request Object
     * 
     * @uses KeywordEditorialStatus
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group that contains the keywords to retrieve.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The review status of the keywords to retrieve.
         * @var KeywordEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The list of additional properties that you want included within each returned keyword.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
