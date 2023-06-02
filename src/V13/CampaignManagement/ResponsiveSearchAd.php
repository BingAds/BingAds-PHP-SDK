<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A responsive ad format for text ads in the Search network.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/responsivesearchad?view=bingads-13 ResponsiveSearchAd Data Object
     * 
     * @uses AssetLink
     */
    final class ResponsiveSearchAd extends Ad
    {
        /**
         * The list of descriptions that Bing can use to optimize the ad layout.
         * @var AssetLink[]
         */
        public $Descriptions;

        /**
         * The URL that will be displayed instead of the final URL.
         * @var string
         */
        public $Domain;

        /**
         * The list of ad titles that Bing can use to optimize the ad layout.
         * @var AssetLink[]
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
