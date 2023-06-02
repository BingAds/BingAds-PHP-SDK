<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatekeywords?view=bingads-13 UpdateKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsResponse
    {
        /**
         * The value of each string represents the type of bidding scheme or bid strategy type that is inherited from the parent campaign or ad group.
         * @var string[]
         */
        public $InheritedBidStrategyTypes;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
