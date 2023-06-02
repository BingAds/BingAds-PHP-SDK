<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The device search parameter filter that you can include when requesting keyword ideas.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/devicesearchparameter?view=bingads-13 DeviceSearchParameter Data Object
     * 
     * @uses DeviceCriterion
     */
    final class DeviceSearchParameter extends SearchParameter
    {
        /**
         * The device criterion for the returned keyword ideas.
         * @var DeviceCriterion
         */
        public $Device;
    }

}
