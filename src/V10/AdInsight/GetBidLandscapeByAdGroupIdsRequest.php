<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link http://msdn.microsoft.com/en-us/library/mt219284(v=msads.100).aspx GetBidLandscapeByAdGroupIds Request Object
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
