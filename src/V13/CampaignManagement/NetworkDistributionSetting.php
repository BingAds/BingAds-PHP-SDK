<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the network distribution setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/networkdistributionsetting?view=bingads-13 NetworkDistributionSetting Data Object
     * 
     * @uses Network
     */
    final class NetworkDistributionSetting extends Setting
    {
        /**
         * Reserved.
         * @var Network
         */
        public $NetworkOption;
    }

}
