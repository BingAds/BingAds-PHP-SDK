<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates bid strategies in an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatebidstrategies?view=bingads-13 UpdateBidStrategies Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateBidStrategies
     */
    final class UpdateBidStrategiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
