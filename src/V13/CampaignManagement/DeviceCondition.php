<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a condition to use conversion value rules for specified devices.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/devicecondition?view=bingads-13 DeviceCondition Data Object
     * 
     * @uses DeviceType
     * @used-by ConversionValueRule
     */
    final class DeviceCondition
    {
        /**
         * The device types included in the condition.
         * @var DeviceType
         */
        public $DeviceTypes;

        /**
         * Indicates if this is the primary condition.
         * @var boolean
         */
        public $IsPrimary;
    }

}
