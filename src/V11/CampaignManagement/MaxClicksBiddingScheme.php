<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * With the MaxClicks bid strategy, you don't need to set ad group or keyword bids.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/maxclicksbiddingscheme?view=bingads-11 MaxClicksBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class MaxClicksBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click that you want to spend.
         * @var Bid
         */
        public $MaxCpc;
    }

}
