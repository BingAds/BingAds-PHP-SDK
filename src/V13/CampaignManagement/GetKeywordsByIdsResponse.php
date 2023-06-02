<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified keywords.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getkeywordsbyids?view=bingads-13 GetKeywordsByIds Response Object
     * 
     * @uses Keyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsResponse
    {
        /**
         * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request.
         * @var Keyword[]
         */
        public $Keywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
