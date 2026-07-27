<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets bid strategies in an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbidstrategiesbyids?view=bingads-13 GetBidStrategiesByIds Request Object
     * 
     * @uses PortfolioBidStrategyAdditionalField
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::GetBidStrategiesByIds
     */
    final class GetBidStrategiesByIdsRequest
    {
        /**
         * A list of unique bid strategy identifiers that identify the bid strategies to get.
         * @var integer[]
         */
        public $BidStrategyIds;

        /**
         * The list of additional properties that you want included within each returned bid strategy.
         * @var PortfolioBidStrategyAdditionalField
         */
        public $ReturnAdditionalFields;

        /**
         * A nullable field used to retrieve bid strategy IDs in the request for the specified scope.
         * @var EntityScope
         */
        public $Scope;
    }
}
