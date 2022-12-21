<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the details for performance insights.
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
         * For account level, this is AccountId.
         * @var integer
         */
        public $EntityId;

        /**
         * The supported types are account and campaign.
         * @var EntityType
         */
        public $EntityType;

        /**
         * Defines the type of key performance indicator.
         * @var KPIType
         */
        public $KPIType;

        /**
         * The date of the detected performance insights.
         * @var DayMonthAndYear
         */
        public $Date;

        /**
         * A message to describe the performance insights.
         * @var PerformanceInsightsMessage
         */
        public $Description;

        /**
         * Messages that describe the root causes in "What happened."
         * @var PerformanceInsightsMessage[]
         */
        public $RootCauses;

        /**
         * Messages that describe the actions in "What can I do."
         * @var PerformanceInsightsMessage[]
         */
        public $Actions;
    }

}
