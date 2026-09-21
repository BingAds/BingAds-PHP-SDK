<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the campaign frequency cap setting data object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/campaignfrequencycapsetting?view=bingads-13 CampaignFrequencyCapSetting Data Object
     * 
     * @uses FrequencyCapTimeGranularity
     */
    final class CampaignFrequencyCapSetting extends Setting
    {
        /**
         * Reserved.
         * @var integer
         */
        public $CapValue;

        /**
         * Reserved.
         * @var FrequencyCapTimeGranularity
         */
        public $TimeGranularity;
    }

}
