<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the GetCampaignIdsByBidStrategyIds Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getcampaignidsbybidstrategyids?view=bingads-13 GetCampaignIdsByBidStrategyIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBidStrategyIds
     */
    final class GetCampaignIdsByBidStrategyIdsRequest
    {
        /**
         * Reserved.
         * @var integer[]
         */
        public $BidStrategyIds;
    }
}
