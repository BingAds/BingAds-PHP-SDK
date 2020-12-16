<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the AddBidStrategies Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/addbidstrategies?view=bingads-13 AddBidStrategies Request Object
     * 
     * @uses BidStrategy
     * @used-by BingAdsCampaignManagementService::AddBidStrategies
     */
    final class AddBidStrategiesRequest
    {
        /**
         * Reserved.
         * @var BidStrategy[]
         */
        public $BidStrategies;
    }
}
