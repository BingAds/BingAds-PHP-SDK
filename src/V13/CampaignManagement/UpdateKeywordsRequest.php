<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatekeywords?view=bingads-13 UpdateKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsRequest
    {
        /**
         * The identifier of the ad group whose keywords will be updated.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of Keyword objects that contains the updated keyword information.
         * @var Keyword[]
         */
        public $Keywords;

        /**
         * Determines whether or not the service should return the bid strategy type that is inherited from the parent campaign or ad group.
         * @var boolean
         */
        public $ReturnInheritedBidStrategyTypes;
    }
}
