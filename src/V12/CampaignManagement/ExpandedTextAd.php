<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an expanded text ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/expandedtextad?view=bingads-12 ExpandedTextAd Data Object
     */
    final class ExpandedTextAd extends Ad
    {
        /**
         * The URL that will be displayed instead of the final URL.
         * @var string
         */
        public $Domain;

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
         * Reserved for future use.
         * @var string
         */
        public $TextPart2;

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

        /**
         * Reserved for future use.
         * @var string
         */
        public $TitlePart3;
    }

}
