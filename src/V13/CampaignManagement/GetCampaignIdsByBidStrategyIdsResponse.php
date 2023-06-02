<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaign identifiers that are associated with the specified portfolio bid strategies.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignidsbybidstrategyids?view=bingads-13 GetCampaignIdsByBidStrategyIds Response Object
     * 
     * @uses IdCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBidStrategyIds
     */
    final class GetCampaignIdsByBidStrategyIdsResponse
    {
        /**
         * The list of campaign id collections that corresponds directly to the bid strategy identifiers that you specified in the request.
         * @var IdCollection[]
         */
        public $CampaignIdCollection;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
