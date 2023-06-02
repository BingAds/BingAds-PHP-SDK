<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/bidopportunity?view=bingads-13 BidOpportunity Data Object
     * 
     * @used-by GetBidOpportunitiesResponse
     */
    final class BidOpportunity extends Opportunity
    {
        /**
         * The identifier of the ad group that owns the keyword.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the campaign for the ad group that owns the keyword.
         * @var integer
         */
        public $CampaignId;

        /**
         * The current keyword bid amount specified for the match type in the MatchType element.
         * @var double
         */
        public $CurrentBid;

        /**
         * The estimated clicks opportunities corresponding to the suggested bid.
         * @var double
         */
        public $EstimatedIncreaseInClicks;

        /**
         * The estimated increase in spend corresponding to the suggested bid.
         * @var double
         */
        public $EstimatedIncreaseInCost;

        /**
         * The estimated impressions opportunities corresponding to the suggested bid.
         * @var integer
         */
        public $EstimatedIncreaseInImpressions;

        /**
         * The identifier of the keyword to which the bid opportunity applies.
         * @var integer
         */
        public $KeywordId;

        /**
         * The match type to which the suggested bid value applies.
         * @var string
         */
        public $MatchType;

        /**
         * The suggested bid based on the last 7 days of performance history for the corresponding ad group.
         * @var double
         */
        public $SuggestedBid;
    }

}
