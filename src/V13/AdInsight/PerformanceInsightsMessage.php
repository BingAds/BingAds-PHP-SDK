<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/performanceinsightsmessage?view=bingads-13 PerformanceInsightsMessage Data Object
     * 
     * @uses PerformanceInsightsMessageTemplateId
     * @uses PerformanceInsightsMessageParameter
     * @used-by PerformanceInsightsDetail
     */
    final class PerformanceInsightsMessage
    {
        /**
         * Reserved.
         * @var PerformanceInsightsMessageTemplateId
         */
        public $TemplateId;

        /**
         * Reserved.
         * @var PerformanceInsightsMessageParameter[]
         */
        public $Parameters;

        /**
         * Reserved.
         * @var integer
         */
        public $IndentationLevel;
    }

}
