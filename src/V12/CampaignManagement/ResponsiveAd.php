<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * A responsive ad format for Audience ads in the Microsoft Audience Network.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/responsivead?view=bingads-12 ResponsiveAd Data Object
     * 
     * @uses CallToAction
     * @uses AssetLink
     */
    final class ResponsiveAd extends Ad
    {
        /**
         * The name of the business.
         * @var string
         */
        public $BusinessName;

        /**
         * A brief, punchy reason for customers to click your ad right now.
         * @var CallToAction
         */
        public $CallToAction;

        /**
         * This is one of two possible headlines that could appear in your audience ads.
         * @var string
         */
        public $Headline;

        /**
         * Reserved.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * This is the identifier of the media corresponding to one of two possible aspect ratios for images that could appear in your audience ads.
         * @var integer
         */
        public $LandscapeImageMediaId;

        /**
         * This is the identifier of the media corresponding to one of two possible aspect ratios for logos that could appear in your audience ads.
         * @var integer
         */
        public $LandscapeLogoMediaId;

        /**
         * This is one of two possible headlines that could appear in your audience ads.
         * @var string
         */
        public $LongHeadline;

        /**
         * This is one of two possible aspect ratios for images that could appear in your audience ads.
         * @var integer
         */
        public $SquareImageMediaId;

        /**
         * This is one of two possible aspect ratios for logos that could appear in your audience ads.
         * @var integer
         */
        public $SquareLogoMediaId;

        /**
         * Depending on your audience ad's placement, this text will appear below or adjacent to your ad's long or short headline.
         * @var string
         */
        public $Text;
    }

}
