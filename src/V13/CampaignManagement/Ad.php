<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of an ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/ad?view=bingads-13 Ad Data Object
     * 
     * @uses AdEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses AdStatus
     * @uses AdType
     * @uses CustomParameters
     * @used-by AddAdsRequest
     * @used-by GetAdsByAdGroupIdResponse
     * @used-by GetAdsByEditorialStatusResponse
     * @used-by GetAdsByIdsResponse
     * @used-by UpdateAdsRequest
     */
    class Ad
    {
        /**
         * The Ad Format Preference is used to indicate whether or not you prefer the ad copy to be shown to users as a search or audience ad.
         * @var string
         */
        public $AdFormatPreference;

        /**
         * Determines the device preference for showing the ad.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The final URL suffix can include tracking parameters that will be appended to the end of your landing page URL.
         * @var string
         */
        public $FinalUrlSuffix;

        /**
         * The last or final URL where a user is ultimately taken, whether or not the click to final URL path included any redirects.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Microsoft Advertising identifier for the ad.
         * @var integer
         */
        public $Id;

        /**
         * The status of the ad.
         * @var AdStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all landing page URLs.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * The type of the ad.
         * @var AdType
         */
        public $Type;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
