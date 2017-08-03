<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Response Object
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
