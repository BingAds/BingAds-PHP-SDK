<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/getbidlandscapebyadgroupids?version=11 GetBidLandscapeByAdGroupIds Response Object
     * 
     * @uses AdGroupBidLandscape
     * @used-by BingAdsAdInsightService::GetBidLandscapeByAdGroupIds
     */
    final class GetBidLandscapeByAdGroupIdsResponse
    {
        /**
         * An array of AdGroupBidLandscape objects.
         * @var AdGroupBidLandscape[]
         */
        public $BidLandscape;
    }
}
