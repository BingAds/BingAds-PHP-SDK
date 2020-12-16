<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the GetCampaignIdsByBidStrategyIds Service Operation.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getcampaignidsbybidstrategyids?view=bingads-13 GetCampaignIdsByBidStrategyIds Response Object
     * 
     * @uses IdCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBidStrategyIds
     */
    final class GetCampaignIdsByBidStrategyIdsResponse
    {
        /**
         * Reserved.
         * @var IdCollection[]
         */
        public $CampaignIdCollection;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
