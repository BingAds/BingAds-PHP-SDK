<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getbidopportunities?view=bingads-13 GetBidOpportunities Response Object
     * 
     * @uses BidOpportunity
     * @used-by BingAdsAdInsightService::GetBidOpportunities
     */
    final class GetBidOpportunitiesResponse
    {
        /**
         * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the suggested match-type bid value.
         * @var BidOpportunity[]
         */
        public $Opportunities;
    }
}
