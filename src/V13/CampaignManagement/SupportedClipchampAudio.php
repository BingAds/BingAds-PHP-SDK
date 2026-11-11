<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the supported clip champ audio data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/supportedclipchampaudio?view=bingads-13 SupportedClipchampAudio Data Object
     * 
     * @used-by SupportedClipchampAudioData
     */
    final class SupportedClipchampAudio
    {
        /**
         * The name of the supported audio track.
         * @var string
         */
        public $AudioName;

        /**
         * The category of the supported audio track.
         * @var string
         */
        public $Category;

        /**
         * The URL of the supported audio track.
         * @var string
         */
        public $Url;
    }

}
