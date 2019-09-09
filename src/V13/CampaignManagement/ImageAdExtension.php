<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies an image with alternative text to include in an expanded text ad.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/imageadextension?view=bingads-13 ImageAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses AssetLink
     * @uses CustomParameters
     */
    final class ImageAdExtension extends AdExtension
    {
        /**
         * Alternative description of the image media for usability.
         * @var string
         */
        public $AlternativeText;

        /**
         * Description that can be used by the advertiser, agency, or account manager to track, label, or manage image media.
         * @var string
         */
        public $Description;

        /**
         * The URL of the webpage to take the user to when they click the image.
         * @var string
         */
        public $DestinationUrl;

        /**
         * Reserved for future use.
         * @var string
         */
        public $DisplayText;

        /**
         * Not supported for image ad extensions.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Not supported for image ad extensions.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Not supported for image ad extensions.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * Not supported for image ad extensions.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The identifiers of the images to include in the ad.
         * @var integer[]
         */
        public $ImageMediaIds;

        /**
         * Reserved for future use.
         * @var AssetLink[]
         */
        public $Images;

        /**
         * Not supported for image ad extensions.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Not supported for image ad extensions.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
