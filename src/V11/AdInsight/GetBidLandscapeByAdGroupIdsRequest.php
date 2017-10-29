<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getbidlandscapebyadgroupids?version=11 GetBidLandscapeByAdGroupIds Request Object
     * 
     * @uses AdGroupBidLandscapeInput
     * @used-by BingAdsAdInsightService::GetBidLandscapeByAdGroupIds
     */
    final class GetBidLandscapeByAdGroupIdsRequest
    {
        /**
         * An array of ad group identifiers with corresponding bid landscape type input.
         * @var AdGroupBidLandscapeInput[]
         */
        public $AdGroupBidLandscapeInputs;
    }
}
