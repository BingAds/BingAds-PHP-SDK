<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the campaign frequency cap setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/campaignfrequencycapsetting?view=bingads-13 CampaignFrequencyCapSetting Data Object
     * 
     * @uses FrequencyCapTimeGranularity
     */
    final class CampaignFrequencyCapSetting extends Setting
    {
        /**
         * The maximum number of times that an ad can be shown to the same person during the specified time period.
         * @var integer
         */
        public $CapValue;

        /**
         * The time period over which the frequency cap is applied.
         * @var FrequencyCapTimeGranularity
         */
        public $TimeGranularity;
    }

}
