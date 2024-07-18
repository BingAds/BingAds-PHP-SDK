<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a RangeResultOfDecimalRoundedResult data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/rangeresultofdecimalroundedresult?view=bingads-13 RangeResultOfDecimalRoundedResult Data Object
     * 
     * @uses DecimalRoundedResult
     * @used-by GetAudienceFullEstimationResponse
     */
    final class RangeResultOfDecimalRoundedResult
    {
        /**
         * Indicates the upper bound of range result.
         * @var DecimalRoundedResult
         */
        public $High;

        /**
         * Indicates the lower bound of range result.
         * @var DecimalRoundedResult
         */
        public $Low;
    }

}
