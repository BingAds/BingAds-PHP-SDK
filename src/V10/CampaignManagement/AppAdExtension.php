<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an app ad extension that can be included in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/dn817898(v=msads.100).aspx AppAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class AppAdExtension extends AdExtension
    {
        public $AppPlatform;
        public $AppStoreId;
        public $DestinationUrl;
        public $DevicePreference;
        public $DisplayText;
        public $FinalAppUrls;
        public $FinalMobileUrls;
        public $FinalUrls;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

}
