<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the maximum conversion value bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/maxconversionvaluebiddingscheme?view=bingads-13 MaxConversionValueBiddingScheme Data Object
     */
    final class MaxConversionValueBiddingScheme extends BiddingScheme
    {
        /**
         * Reserved for future use.
         * @var double
         */
        public $TargetRoas;
    }

}
