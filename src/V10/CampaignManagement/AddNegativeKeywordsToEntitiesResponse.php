<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Response Object
     * 
     * @uses IdCollection
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesResponse
    {
        /**
         * A list of IdCollection corresponding to the negative keywords that were added for the corresponding entity.
         * @var IdCollection[]
         */
        public $NegativeKeywordIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any negative keyword that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }
}
