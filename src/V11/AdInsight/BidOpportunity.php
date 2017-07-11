<?php
// Generated on 7/10/2017 3:08:16 PM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
     * @link http://msdn.microsoft.com/en-us/library/mt219336(v=msads.110).aspx BidOpportunity Data Object
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
