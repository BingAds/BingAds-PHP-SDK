<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/frequencycapsettings?view=bingads-13 FrequencyCapSettings Data Object
     * 
     * @uses FrequencyCapTimeGranularity
     * @used-by AdGroup
     */
    final class FrequencyCapSettings
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
