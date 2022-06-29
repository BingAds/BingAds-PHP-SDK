<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/entityparameter?view=bingads-13 EntityParameter Data Object
     * 
     * @uses EntityDetail
     * @uses PerformanceInsightsEntityType
     */
    final class EntityParameter extends PerformanceInsightsMessageParameter
    {
        /**
         * Reserved.
         * @var integer
         */
        public $EntityCount;

        /**
         * Reserved.
         * @var EntityDetail[]
         */
        public $EntityDetails;

        /**
         * Reserved.
         * @var PerformanceInsightsEntityType
         */
        public $EntityType;

        /**
         * Reserved.
         * @var string
         */
        public $SuggestedText;
    }

}
