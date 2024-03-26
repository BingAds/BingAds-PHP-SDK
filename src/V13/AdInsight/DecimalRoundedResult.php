<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/decimalroundedresult?view=bingads-13 DecimalRoundedResult Data Object
     * 
     * @uses ScaleUnit
     * @used-by RangeResultOfDecimalRoundedResult
     * @used-by GetAudienceFullEstimationResponse
     */
    final class DecimalRoundedResult
    {
        /**
         * Reserved.
         * @var double
         */
        public $Value;

        /**
         * Reserved.
         * @var ScaleUnit
         */
        public $Unit;
    }

}
