<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/responsivead?view=bingads-11 ResponsiveAd Data Object
     * 
     * @uses CallToAction
     */
    final class ResponsiveAd extends Ad
    {
        /**
         * Reserved.
         * @var string
         */
        public $BusinessName;

        /**
         * Reserved.
         * @var CallToAction
         */
        public $CallToAction;

        /**
         * Reserved.
         * @var string
         */
        public $Headline;

        /**
         * Reserved.
         * @var integer
         */
        public $LandscapeImageMediaId;

        /**
         * Reserved.
         * @var integer
         */
        public $LandscapeLogoMediaId;

        /**
         * Reserved.
         * @var string
         */
        public $LongHeadline;

        /**
         * Reserved.
         * @var integer
         */
        public $SquareImageMediaId;

        /**
         * Reserved.
         * @var integer
         */
        public $SquareLogoMediaId;

        /**
         * Reserved.
         * @var string
         */
        public $Text;
    }

}
