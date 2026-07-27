<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the location breakdown data object.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/locationbreakdown?view=bingads-13 LocationBreakdown Data Object
     * 
     * @uses LocationInfo
     * @used-by Breakdowns
     */
    final class LocationBreakdown extends Breakdown
    {
        /**
         * The location information about a location breakdown.
         * @var LocationInfo[]
         */
        public $Info;
    }

}
