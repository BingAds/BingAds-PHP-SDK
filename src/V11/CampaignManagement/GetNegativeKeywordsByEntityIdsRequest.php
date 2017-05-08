<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.110).aspx GetNegativeKeywordsByEntityIds Request Object
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
