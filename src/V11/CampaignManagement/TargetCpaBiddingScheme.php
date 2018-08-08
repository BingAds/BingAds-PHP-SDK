<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * With the TargetCpa (cost per acquisition) bid strategy, you don't need to set ad group or keyword bids.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/targetcpabiddingscheme?view=bingads-11 TargetCpaBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetCpaBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click that you want to spend.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * The target cost per acquisition (CPA) that you want used by Bing Ads to maximize conversions.
         * @var double
         */
        public $TargetCpa;
    }

}
