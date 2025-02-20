<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a DecimalRoundedResult data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/decimalroundedresult?view=bingads-13 DecimalRoundedResult Data Object
     * 
     * @uses ScaleUnit
     * @used-by RangeResultOfDecimalRoundedResult
     * @used-by GetAudienceFullEstimationResponse
     */
    final class DecimalRoundedResult
    {
        /**
         * The rounded value to the nearest scale unit.
         * @var double
         */
        public $Value;

        /**
         * The scale unit: Thousand, Million, Billion, None.
         * @var ScaleUnit
         */
        public $Unit;
    }

}
