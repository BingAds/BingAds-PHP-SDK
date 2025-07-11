<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a location condition item data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/locationconditionitem?view=bingads-13 LocationConditionItem Data Object
     * 
     * @uses LocationType
     * @used-by LocationCondition
     */
    final class LocationConditionItem
    {
        /**
         * The unique identifier of the location condition item.
         * @var integer
         */
        public $Id;

        /**
         * The name of the location condition item.
         * @var string
         */
        public $Name;

        /**
         * The type of the location condition item.
         * @var LocationType
         */
        public $Type;
    }

}
