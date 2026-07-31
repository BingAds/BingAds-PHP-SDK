<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines a data object that includes or excludes device types.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionofdeviceenum?view=bingads-13 SelectionOfDeviceEnum Data Object
     * 
     * @uses DeviceEnum
     * @used-by GetAudienceBreakdownRequest
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOfDeviceEnum
    {
        /**
         * Include the type of desvices present in the DeviceEnum.
         * @var DeviceEnum[]
         */
        public $Includes;

        /**
         * Exclude the type of devices present in the DeviceEnum.
         * @var DeviceEnum[]
         */
        public $Excludes;
    }

}
