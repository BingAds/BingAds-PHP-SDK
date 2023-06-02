<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the message parameters for performance insights.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/performanceinsightsmessageparameter?view=bingads-13 PerformanceInsightsMessageParameter Data Object
     * 
     * @uses ParameterType
     * @used-by PerformanceInsightsMessage
     */
    class PerformanceInsightsMessageParameter
    {
        /**
         * The supported types are: text, URL, and entities.
         * @var ParameterType
         */
        public $Type;
    }

}
