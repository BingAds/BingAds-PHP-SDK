<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the audio filter data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/audiofilter?view=bingads-13 AudioFilter Data Object
     * 
     * @used-by GetSupportedClipchampAudioRequest
     */
    final class AudioFilter
    {
        /**
         * Reserved.
         * @var string[]
         */
        public $AudioNames;

        /**
         * Reserved.
         * @var string[]
         */
        public $Categories;
    }

}
