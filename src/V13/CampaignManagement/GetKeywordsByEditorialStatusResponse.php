<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyeditorialstatus?view=bingads-13 GetKeywordsByEditorialStatus Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusResponse
    {
        /**
         * An array of Keyword objects that contains information about the keywords that were retrieved.
         * @var Keyword[]
         */
        public $Keywords;
    }
}
