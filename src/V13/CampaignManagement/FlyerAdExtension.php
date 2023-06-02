<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Flyer Extensions enable advertisers to distribute product or store catalogues (flyers) to potential customers.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/flyeradextension?view=bingads-13 FlyerAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class FlyerAdExtension extends AdExtension
    {
        /**
         * Description that can be used by the advertiser, agency, or account manager to track, label, or manage flyer extensions.
         * @var string
         */
        public $Description;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The landing page URL for mobile devices.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The flyer name.
         * @var string
         */
        public $FlyerName;

        /**
         * The identifier of the image to include in the ad.
         * @var integer[]
         */
        public $ImageMediaIds;

        /**
         * The URL of the media that you already added.
         * @var string[]
         */
        public $ImageMediaUrls;

        /**
         * The unique identifier of a Microsoft Merchant Center store used for product ads.
         * @var integer
         */
        public $StoreId;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
