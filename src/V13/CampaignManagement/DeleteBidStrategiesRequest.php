<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes bid strategies from an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebidstrategies?view=bingads-13 DeleteBidStrategies Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBidStrategies
     */
    final class DeleteBidStrategiesRequest
    {
        /**
         * The identifiers of bid strategies to delete from the account's portfolio bid strategy library.
         * @var integer[]
         */
        public $BidStrategyIds;
    }
}
