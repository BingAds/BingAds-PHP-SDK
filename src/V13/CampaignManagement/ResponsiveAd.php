<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A responsive ad format for Audience ads in the Microsoft Audience Network.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/responsivead?view=bingads-13 ResponsiveAd Data Object
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
         * Reserved for future use.
         * @var AssetLink[]
         */
        public $Descriptions;

        /**
         * This is one of two possible headlines that could appear in your audience ads.
         * @var string
         */
        public $Headline;

        /**
         * Reserved for future use.
         * @var AssetLink[]
         */
        public $Headlines;

        /**
         * Because audience ads are responsive, you can create multiple image assets with different sizes and aspect ratios so they can flexibly display across a variety of publishers and placements.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * Reserved for future use.
         * @var AssetLink
         */
        public $LongHeadline;

        /**
         * This is one of two possible headlines that could appear in your audience ads.
         * @var string
         */
        public $LongHeadlineString;

        /**
         * Depending on your audience ad's placement, this text will appear below or adjacent to your ad's long or short headline.
         * @var string
         */
        public $Text;
    }

}
