<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a text ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/textad?view=bingads-11 TextAd Data Object
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
