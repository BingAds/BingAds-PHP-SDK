<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads on specific devices.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/devicecriterion?view=bingads-13 DeviceCriterion Data Object
     */
    final class DeviceCriterion extends Criterion
    {
        /**
         * The name of the device to target.
         * @var string
         */
        public $DeviceName;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $OSName;
    }

}
