<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum conversions bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/maxconversionsbiddingscheme?view=bingads-13 MaxConversionsBiddingScheme Data Object
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

        /**
         * The target cost per action that you want to spend.
         * @var double
         */
        public $TargetCpa;
    }

}
