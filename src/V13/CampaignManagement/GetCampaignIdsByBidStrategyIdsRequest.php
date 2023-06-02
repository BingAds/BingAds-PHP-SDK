<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that are associated with the specified portfolio bid strategies.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignidsbybidstrategyids?view=bingads-13 GetCampaignIdsByBidStrategyIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBidStrategyIds
     */
    final class GetCampaignIdsByBidStrategyIdsRequest
    {
        /**
         * A list of unique bid strategy identifiers that identify the campaign identifiers to get.
         * @var integer[]
         */
        public $BidStrategyIds;
    }
}
