<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum clicks bid strategy type.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/maxclicksbiddingscheme?version=11 MaxClicksBiddingScheme Data Object
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
