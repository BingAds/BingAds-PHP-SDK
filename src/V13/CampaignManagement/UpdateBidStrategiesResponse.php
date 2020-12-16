<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the UpdateBidStrategies Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/updatebidstrategies?view=bingads-13 UpdateBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateBidStrategies
     */
    final class UpdateBidStrategiesResponse
    {
        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
