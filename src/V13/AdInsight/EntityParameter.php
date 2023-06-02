<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that provides parameter information for an entity.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/entityparameter?view=bingads-13 EntityParameter Data Object
     * 
     * @uses EntityDetail
     * @uses PerformanceInsightsEntityType
     */
    final class EntityParameter extends PerformanceInsightsMessageParameter
    {
        /**
         * The number of entities.
         * @var integer
         */
        public $EntityCount;

        /**
         * The detail information for entities.
         * @var EntityDetail[]
         */
        public $EntityDetails;

        /**
         * The entity type.
         * @var PerformanceInsightsEntityType
         */
        public $EntityType;

        /**
         * The suggested string value to substitute for the message.
         * @var string
         */
        public $SuggestedText;
    }

}
