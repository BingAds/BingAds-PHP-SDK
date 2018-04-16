<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the base object of an ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/ad?view=bingads-12 Ad Data Object
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
         * The Ad Format Preference is used to indicate whether or not you prefer the ad copy to be shown to users as a search or native ad.
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
         * The unique Bing Ads identifier for the ad.
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
