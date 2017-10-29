<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The device criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/devicecriterion?version=11 DeviceCriterion Data Object
     * 
     * @used-by DeviceSearchParameter
     */
    final class DeviceCriterion extends Criterion
    {
        /**
         * The device that you want to target.
         * @var string
         */
        public $DeviceName;
    }

}
