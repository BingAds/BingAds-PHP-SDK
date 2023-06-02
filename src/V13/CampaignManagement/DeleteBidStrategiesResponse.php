<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes bid strategies from an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletebidstrategies?view=bingads-13 DeleteBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBidStrategies
     */
    final class DeleteBidStrategiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
