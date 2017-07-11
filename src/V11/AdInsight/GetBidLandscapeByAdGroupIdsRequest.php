<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Given a list of existing ad groups, this operation returns for each a list of suggested bids and estimated performance statistics.
     * @link http://msdn.microsoft.com/en-us/library/mt219284(v=msads.110).aspx GetBidLandscapeByAdGroupIds Request Object
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
