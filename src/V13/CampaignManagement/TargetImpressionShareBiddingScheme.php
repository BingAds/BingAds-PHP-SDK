<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * TargetImpressionShareBiddingScheme is reserved for future use.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/targetimpressionsharebiddingscheme?view=bingads-13 TargetImpressionShareBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetImpressionShareBiddingScheme extends BiddingScheme
    {
        /**
         * Reserved.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * Reserved.
         * @var string
         */
        public $TargetAdPosition;

        /**
         * Reserved.
         * @var double
         */
        public $TargetImpressionShare;
    }

}
