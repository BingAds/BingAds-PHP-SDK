<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a dynamic search ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/dynamicsearchad?view=bingads-13 DynamicSearchAd Data Object
     */
    final class DynamicSearchAd extends Ad
    {
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
         * The first part of the ad description.
         * @var string
         */
        public $Text;

        /**
         * The second part of the ad description.
         * @var string
         */
        public $TextPart2;
    }

}
