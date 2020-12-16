<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the GetBidStrategiesByIds Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getbidstrategiesbyids?view=bingads-13 GetBidStrategiesByIds Response Object
     * 
     * @uses BidStrategy
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBidStrategiesByIds
     */
    final class GetBidStrategiesByIdsResponse
    {
        /**
         * Reserved.
         * @var BidStrategy[]
         */
        public $BidStrategies;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
