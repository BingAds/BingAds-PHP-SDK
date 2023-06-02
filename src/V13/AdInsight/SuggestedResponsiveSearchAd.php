<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an object that describes the suggested responsive search ads.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/suggestedresponsivesearchad?view=bingads-13 SuggestedResponsiveSearchAd Data Object
     * 
     * @used-by ResponsiveSearchAdsRecommendation
     */
    final class SuggestedResponsiveSearchAd
    {
        /**
         * The list of descriptions of suggested ad with 2-4 descriptions.
         * @var string[]
         */
        public $Descriptions;

        /**
         * The landing page URL.
         * @var string
         */
        public $FinalUrl;

        /**
         * The list of titles of suggested ads with 3-15 headlines.
         * @var string[]
         */
        public $Headlines;

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
    }

}
