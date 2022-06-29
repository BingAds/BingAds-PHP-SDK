<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/performanceinsightsdetail?view=bingads-13 PerformanceInsightsDetail Data Object
     * 
     * @uses EntityType
     * @uses KPIType
     * @uses DayMonthAndYear
     * @uses PerformanceInsightsMessage
     * @used-by GetPerformanceInsightsDetailDataByAccountIdResponse
     */
    final class PerformanceInsightsDetail
    {
        /**
         * Reserved.
         * @var integer
         */
        public $EntityId;

        /**
         * Reserved.
         * @var EntityType
         */
        public $EntityType;

        /**
         * Reserved.
         * @var KPIType
         */
        public $KPIType;

        /**
         * Reserved.
         * @var DayMonthAndYear
         */
        public $Date;

        /**
         * Reserved.
         * @var PerformanceInsightsMessage
         */
        public $Description;

        /**
         * Reserved.
         * @var PerformanceInsightsMessage[]
         */
        public $RootCauses;

        /**
         * Reserved.
         * @var PerformanceInsightsMessage[]
         */
        public $Actions;
    }

}
