<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a condition to use conversion value rules in a specific location.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationcondition?view=bingads-13 LocationCondition Data Object
     * 
     * @uses IntentOption
     * @uses LocationConditionItem
     * @used-by ConversionValueRule
     */
    final class LocationCondition
    {
        /**
         * The intent option for excluded locations.
         * @var IntentOption
         */
        public $ExcludedLocationIntent;

        /**
         * The locations excluded from the condition.
         * @var LocationConditionItem[]
         */
        public $ExcludedLocations;

        /**
         * The intent option for included locations.
         * @var IntentOption
         */
        public $IncludedLocationIntent;

        /**
         * The locations included in the condition.
         * @var LocationConditionItem[]
         */
        public $IncludedLocations;

        /**
         * Indicates if this is the primary condition.
         * @var boolean
         */
        public $IsPrimary;
    }

}
