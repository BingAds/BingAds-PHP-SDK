<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationcondition?view=bingads-13 LocationCondition Data Object
     * 
     * @uses IntentOption
     * @uses LocationConditionItem
     * @used-by ConversionValueRule
     */
    final class LocationCondition
    {
        /**
         * Reserved.
         * @var IntentOption
         */
        public $ExcludedLocationIntent;

        /**
         * Reserved.
         * @var LocationConditionItem[]
         */
        public $ExcludedLocations;

        /**
         * Reserved.
         * @var IntentOption
         */
        public $IncludedLocationIntent;

        /**
         * Reserved.
         * @var LocationConditionItem[]
         */
        public $IncludedLocations;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsPrimary;
    }

}
