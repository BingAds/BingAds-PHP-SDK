<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getnegativekeywordsbyentityids?view=bingads-12 GetNegativeKeywordsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsRequest
    {
        /**
         * An array of entity identifiers to return the associated negative keywords.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The identifier of the parent entity corresponding to the specified EntityIds element.
         * @var integer
         */
        public $ParentEntityId;
    }
}
