<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keywords that are assigned directly to campaigns or ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getnegativekeywordsbyentityids?view=bingads-13 GetNegativeKeywordsByEntityIds Response Object
     * 
     * @uses EntityNegativeKeyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsResponse
    {
        /**
         * An array of EntityNegativeKeyword objects that corresponds directly to the entity identifiers that you specified in the request.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
