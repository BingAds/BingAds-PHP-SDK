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
         * The audio names to include in the results.
         * @var string[]
         */
        public $AudioNames;

        /**
         * The audio categories to include in the results.
         * @var string[]
         */
        public $Categories;
    }

}
