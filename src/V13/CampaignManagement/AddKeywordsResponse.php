<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds one or more keywords to an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addkeywords?view=bingads-13 AddKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsResponse
    {
        /**
         * The value of each string represents the type of bidding scheme or bid strategy type that is inherited from the parent campaign or ad group.
         * @var string[]
         */
        public $InheritedBidStrategyTypes;

        /**
         * A list of unique system identifiers corresponding to the keywords that were added.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
