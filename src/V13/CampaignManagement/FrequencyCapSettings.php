<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the FrequencyCapSettings object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/frequencycapsettings?view=bingads-13 FrequencyCapSettings Data Object
     * 
     * @uses FrequencyCapTimeGranularity
     * @used-by AdGroup
     */
    final class FrequencyCapSettings
    {
        /**
         * A limit to the number of times an ad is shown.
         * @var integer
         */
        public $CapValue;

        /**
         * What unit to limit the ad serves.
         * @var string
         */
        public $FrequencyCapUnit;

        /**
         * The smallest time interval to limit ad serves.
         * @var FrequencyCapTimeGranularity
         */
        public $TimeGranularity;
    }

}
