<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * The device criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/devicecriterion?view=bingads-13 DeviceCriterion Data Object
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
