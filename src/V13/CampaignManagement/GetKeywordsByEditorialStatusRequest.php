<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyeditorialstatus?view=bingads-13 GetKeywordsByEditorialStatus Request Object
     * 
     * @uses KeywordEditorialStatus
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
    }
}
