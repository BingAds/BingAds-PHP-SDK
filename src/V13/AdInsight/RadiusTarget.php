<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/radiustarget?view=bingads-13 RadiusTarget Data Object
     * 
     * @uses RadiusUnit
     * @used-by GetAudienceFullEstimationRequest
     */
    final class RadiusTarget
    {
        /**
         * Reserved.
         * @var integer
         */
        public $Radius;

        /**
         * Reserved.
         * @var RadiusUnit
         */
        public $RadiusUnit;

        /**
         * Reserved.
         * @var double
         */
        public $CenterLatitude;

        /**
         * Reserved.
         * @var double
         */
        public $CenterLongitude;
    }

}
