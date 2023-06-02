<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an expanded text ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/expandedtextad?view=bingads-13 ExpandedTextAd Data Object
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
         * The first part of the ad description that can show in your ad.
         * @var string
         */
        public $Text;

        /**
         * The second part of the ad description that can show in your ad.
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
         * The third part of the ad title.
         * @var string
         */
        public $TitlePart3;
    }

}
