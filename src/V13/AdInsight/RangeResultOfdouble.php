<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a RangeResultOfDouble data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/rangeresultofdouble?view=bingads-13 RangeResultOfdouble Data Object
     * 
     * @used-by GetAudienceFullEstimationResponse
     */
    final class RangeResultOfdouble
    {
        /**
         * Indicates the upper bound of range result.
         * @var double
         */
        public $High;

        /**
         * Indicates the lower bound of range result.
         * @var double
         */
        public $Low;
    }

}
