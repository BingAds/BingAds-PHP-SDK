<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a RadiusTarget data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/radiustarget?view=bingads-13 RadiusTarget Data Object
     * 
     * @uses RadiusUnit
     * @used-by GetAudienceFullEstimationRequest
     */
    final class RadiusTarget
    {
        /**
         * Indicates the desired amount of radius units.
         * @var integer
         */
        public $Radius;

        /**
         * Indicates the radius unit.
         * @var RadiusUnit
         */
        public $RadiusUnit;

        /**
         * Defines the center latitude.
         * @var double
         */
        public $CenterLatitude;

        /**
         * DEfines the center longitude.
         * @var double
         */
        public $CenterLongitude;
    }

}
