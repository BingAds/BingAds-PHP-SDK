<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * With the MaxConversions bid strategy, you don't need to set ad group or keyword bids.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/maxconversionsbiddingscheme?view=bingads-11 MaxConversionsBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class MaxConversionsBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click that you want to spend.
         * @var Bid
         */
        public $MaxCpc;
    }

}
