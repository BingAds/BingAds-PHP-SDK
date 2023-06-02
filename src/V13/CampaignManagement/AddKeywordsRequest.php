<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addkeywords?view=bingads-13 AddKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsRequest
    {
        /**
         * The identifier of the ad group to add the keywords to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of keywords to add to the ad group.
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
