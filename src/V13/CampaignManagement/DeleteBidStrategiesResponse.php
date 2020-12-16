<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DeleteBidStrategies Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletebidstrategies?view=bingads-13 DeleteBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBidStrategies
     */
    final class DeleteBidStrategiesResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
