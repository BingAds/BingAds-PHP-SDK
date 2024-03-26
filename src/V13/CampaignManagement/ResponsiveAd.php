<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A responsive ad format for audience ads and multimedia ads.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/responsivead?view=bingads-13 ResponsiveAd Data Object
     * 
     * @uses CallToAction
     * @uses LanguageName
     * @uses AssetLink
     * @uses VerifiedTrackingSetting
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
         * The language that the call to action will be served in.
         * @var LanguageName
         */
        public $CallToActionLanguage;

        /**
         * The descriptions that are shown below the path in your ad.
         * @var AssetLink[]
         */
        public $Descriptions;

        /**
         * Headlines are the most prominent text that appears in your ad, so you should make the most out of the available characters.
         * @var string
         */
        public $Headline;

        /**
         * Headlines are the most prominent text that appears in your ad, so you should make the most out of the available characters.
         * @var AssetLink[]
         */
        public $Headlines;

        /**
         * Image assets with different sizes and aspect ratios so they can flexibly display across a variety of publishers and placements.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * The URLs for 1x1 impression tracking pixels.
         * @var string[]
         */
        public $ImpressionTrackingUrls;

        /**
         * For Audience campaigns, LongHeadline is the longer of two possible responsive ad headlines.
         * @var AssetLink
         */
        public $LongHeadline;

        /**
         * Headlines are the most prominent text that appears in your ad, so you should make the most out of the available characters.
         * @var string
         */
        public $LongHeadlineString;

        /**
         * You must set between 1-5 long headlines.
         * @var AssetLink[]
         */
        public $LongHeadlines;

        /**
         * This text will appear below or adjacent to your ad's long or short headline, depending on the ad placement.
         * @var string
         */
        public $Text;

        /**
         * VerifiedTrackingSetting relates third-party measurement settings.
         * @var VerifiedTrackingSetting
         */
        public $VerifiedTrackingSettings;

        /**
         * Video assets with different sizes and aspect ratios so they can flexibly display across a variety of publishers and placements.
         * @var AssetLink[]
         */
        public $Videos;
    }

}
