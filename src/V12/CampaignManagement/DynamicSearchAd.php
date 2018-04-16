<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a dynamic search ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/dynamicsearchad?view=bingads-12 DynamicSearchAd Data Object
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
         * The ad copy.
         * @var string
         */
        public $Text;
    }

}
