<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an expanded text ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/expandedtextad?view=bingads-11 ExpandedTextAd Data Object
     */
    final class ExpandedTextAd extends Ad
    {
        /**
         * The URL that will be displayed instead of the final URL.
         * @var string
         */
        public $DisplayUrl;

        /**
         * The first part of the optional path that will be appended to the domain portion of your display URL.
         * @var string
         */
        public $Path1;

        /**
         * The second part of the optional path that will be appended to the domain portion of your display URL.
         * @var string
         */
        public $Path2;

        /**
         * The ad copy.
         * @var string
         */
        public $Text;

        /**
         * The first part of the ad title.
         * @var string
         */
        public $TitlePart1;

        /**
         * The second part of the ad title.
         * @var string
         */
        public $TitlePart2;
    }

}
