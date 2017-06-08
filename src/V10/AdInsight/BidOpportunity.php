<?php
// Generated on 6/7/2017 5:54:05 AM

namespace Microsoft\BingAds\V10\AdInsight;

{
    /**
     * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/mt219336(v=msads.100).aspx BidOpportunity Data Object
     * 
     * @used-by GetBidOpportunitiesResponse
     */
    final class BidOpportunity extends Opportunity
    {
        public $AdGroupId;
        public $CampaignId;
        public $CurrentBid;
        public $EstimatedIncreaseInClicks;
        public $EstimatedIncreaseInCost;
        public $EstimatedIncreaseInImpressions;
        public $KeywordId;
        public $MatchType;
        public $SuggestedBid;
    }

}
