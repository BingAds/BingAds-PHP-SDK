<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets bid strategies in an account's portfolio bid strategy library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbidstrategiesbyids?view=bingads-13 GetBidStrategiesByIds Response Object
     * 
     * @uses BidStrategy
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBidStrategiesByIds
     */
    final class GetBidStrategiesByIdsResponse
    {
        /**
         * An array of BidStrategy objects that corresponds directly to the bid strategy identifiers that you specified in the request.
         * @var BidStrategy[]
         */
        public $BidStrategies;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
