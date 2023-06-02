<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds bid strategies to an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbidstrategies?view=bingads-13 AddBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBidStrategies
     */
    final class AddBidStrategiesResponse
    {
        /**
         * A list of unique system identifiers corresponding to the bid strategies that were added.
         * @var integer[]
         */
        public $BidStrategyIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
