<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/locationbreakdown?view=bingads-13 LocationBreakdown Data Object
     * 
     * @uses LocationInfo
     * @used-by Breakdowns
     */
    final class LocationBreakdown extends Breakdown
    {
        /**
         * Reserved.
         * @var LocationInfo[]
         */
        public $Info;
    }

}
