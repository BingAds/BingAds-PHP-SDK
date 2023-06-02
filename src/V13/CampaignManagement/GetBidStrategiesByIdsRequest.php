<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets bid strategies in an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbidstrategiesbyids?view=bingads-13 GetBidStrategiesByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBidStrategiesByIds
     */
    final class GetBidStrategiesByIdsRequest
    {
        /**
         * A list of unique bid strategy identifiers that identify the bid strategies to get.
         * @var integer[]
         */
        public $BidStrategyIds;
    }
}
