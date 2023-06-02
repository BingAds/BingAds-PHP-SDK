<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/textad?view=bingads-13 TextAd Data Object
     */
    final class TextAd extends Ad
    {
        /**
         * The URL of the webpage to take the user to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The URL to display in the ad.
         * @var string
         */
        public $DisplayUrl;

        /**
         * The ad copy.
         * @var string
         */
        public $Text;

        /**
         * The title of the ad.
         * @var string
         */
        public $Title;
    }

}
