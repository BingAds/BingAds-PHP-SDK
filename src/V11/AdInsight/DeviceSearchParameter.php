<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The device search parameter filter that you can include when requesting keyword ideas.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/devicesearchparameter?version=11 DeviceSearchParameter Data Object
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
