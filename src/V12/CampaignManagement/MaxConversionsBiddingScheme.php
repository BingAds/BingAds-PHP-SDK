<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum conversions bid strategy type.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/maxconversionsbiddingscheme?view=bingads-12 MaxConversionsBiddingScheme Data Object
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
