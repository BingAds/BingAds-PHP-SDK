<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the AddBidStrategies Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addbidstrategies?view=bingads-13 AddBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBidStrategies
     */
    final class AddBidStrategiesResponse
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $BidStrategyIds;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
