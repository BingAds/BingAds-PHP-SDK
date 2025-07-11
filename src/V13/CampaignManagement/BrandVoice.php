<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the brand voice data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandvoice?view=bingads-13 BrandVoice Data Object
     * 
     * @used-by BrandKit
     */
    final class BrandVoice
    {
        /**
         * The brand personality.
         * @var string
         */
        public $Personality;

        /**
         * The brand tone.
         * @var string[]
         */
        public $Tones;
    }

}
