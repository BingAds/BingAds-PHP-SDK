<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes bid strategies from an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebidstrategies?view=bingads-13 DeleteBidStrategies Request Object
     * 
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::DeleteBidStrategies
     */
    final class DeleteBidStrategiesRequest
    {
        /**
         * The identifiers of bid strategies to delete from the account's portfolio bid strategy library.
         * @var integer[]
         */
        public $BidStrategyIds;

        /**
         * A nullable field used to delete bid strategy IDs in the request for the specified scope.
         * @var EntityScope
         */
        public $Scope;
    }
}
