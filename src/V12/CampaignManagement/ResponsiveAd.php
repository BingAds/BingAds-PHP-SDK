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
         * Because audience ads are responsive, you can create multiple image assets with different sizes and aspect ratios so they can flexibly display across a variety of publishers and placements.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * The identifier of the image asset used for landscape images with 1.91:1 aspect ratio that could appear in your audience ads.
         * @var integer
         */
        public $LandscapeImageMediaId;

        /**
         * This element is reserved for internal use, and will be removed from a future version of the Bing Ads API.
         * @var integer
         */
        public $LandscapeLogoMediaId;

        /**
         * This is one of two possible headlines that could appear in your audience ads.
         * @var string
         */
        public $LongHeadline;

        /**
         * The identifier of the image asset used for square images with 1:1 aspect ratio that could appear in your audience ads.
         * @var integer
         */
        public $SquareImageMediaId;

        /**
         * This element is reserved for internal use, and will be removed from a future version of the Bing Ads API.
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
