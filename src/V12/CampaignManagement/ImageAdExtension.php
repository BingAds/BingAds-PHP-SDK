<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an ad extension that specifies an image with alternative text to include in an expanded text ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/imageadextension?view=bingads-12 ImageAdExtension Data Object
     * 
     * @uses AppUrl
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
