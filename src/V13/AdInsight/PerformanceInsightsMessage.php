<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the message for performance insights.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/performanceinsightsmessage?view=bingads-13 PerformanceInsightsMessage Data Object
     * 
     * @uses PerformanceInsightsMessageTemplateId
     * @uses PerformanceInsightsMessageParameter
     * @used-by PerformanceInsightsDetail
     */
    final class PerformanceInsightsMessage
    {
        /**
         * The message template ID.
         * @var PerformanceInsightsMessageTemplateId
         */
        public $TemplateId;

        /**
         * Message parameters are used to fill in the template that renders the message string.
         * @var PerformanceInsightsMessageParameter[]
         */
        public $Parameters;

        /**
         * Indentation distance or depth when displaying the message.
         * @var integer
         */
        public $IndentationLevel;
    }

}
