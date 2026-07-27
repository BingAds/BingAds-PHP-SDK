<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum conversion value bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/maxconversionvaluebiddingscheme?view=bingads-13 MaxConversionValueBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class MaxConversionValueBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click filter criteria for all keyword estimates in the ad group.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * The target return on ad spend.
         * @var double
         */
        public $TargetRoas;
    }

}
