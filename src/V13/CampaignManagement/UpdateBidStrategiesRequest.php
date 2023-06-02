<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates bid strategies in an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebidstrategies?view=bingads-13 UpdateBidStrategies Request Object
     * 
     * @uses BidStrategy
     * @used-by BingAdsCampaignManagementService::UpdateBidStrategies
     */
    final class UpdateBidStrategiesRequest
    {
        /**
         * An array of BidStrategy objects to update in the account's portfolio bid strategy library.
         * @var BidStrategy[]
         */
        public $BidStrategies;
    }
}
