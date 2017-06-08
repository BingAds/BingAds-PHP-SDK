<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Gets the keyword bid opportunities of the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt219287(v=msads.110).aspx GetBidOpportunities Response Object
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
