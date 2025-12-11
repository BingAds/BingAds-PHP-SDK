<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/selectionofdeviceenum?view=bingads-13 SelectionOfDeviceEnum Data Object
     * 
     * @uses DeviceEnum
     * @used-by GetAudienceBreakdownRequest
     * @used-by GetAudienceFullEstimationRequest
     */
    final class SelectionOfDeviceEnum
    {
        /**
         * Reserved.
         * @var DeviceEnum[]
         */
        public $Includes;

        /**
         * Reserved.
         * @var DeviceEnum[]
         */
        public $Excludes;
    }

}
