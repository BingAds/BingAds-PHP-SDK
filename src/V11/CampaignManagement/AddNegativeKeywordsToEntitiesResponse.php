<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.110).aspx AddNegativeKeywordsToEntities Response Object
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
