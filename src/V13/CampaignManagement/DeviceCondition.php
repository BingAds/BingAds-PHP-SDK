<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/devicecondition?view=bingads-13 DeviceCondition Data Object
     * 
     * @uses DeviceType
     * @used-by ConversionValueRule
     */
    final class DeviceCondition
    {
        /**
         * Reserved.
         * @var DeviceType
         */
        public $DeviceTypes;

        /**
         * Reserved.
         * @var boolean
         */
        public $IsPrimary;
    }

}
