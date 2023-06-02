<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum clicks bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/maxclicksbiddingscheme?view=bingads-13 MaxClicksBiddingScheme Data Object
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
