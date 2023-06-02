<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds bid strategies to an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addbidstrategies?view=bingads-13 AddBidStrategies Request Object
     * 
     * @uses BidStrategy
     * @used-by BingAdsCampaignManagementService::AddBidStrategies
     */
    final class AddBidStrategiesRequest
    {
        /**
         * An array of BidStrategy objects to add to the account's portfolio bid strategy library.
         * @var BidStrategy[]
         */
        public $BidStrategies;
    }
}
