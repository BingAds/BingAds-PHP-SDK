<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * An automated bidding strategy to get the target impression share for the ad position where you want your ads to appear.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/targetimpressionsharebiddingscheme?view=bingads-13 TargetImpressionShareBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetImpressionShareBiddingScheme extends BiddingScheme
    {
        /**
         * This is the maximum amount that you're willing to pay for a click on your ad.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * This is where on search results pages you want your ads to appear for the target impression share you set.
         * @var string
         */
        public $TargetAdPosition;

        /**
         * The target impression share for the ad position where you want your ads to appear.
         * @var double
         */
        public $TargetImpressionShare;
    }

}
