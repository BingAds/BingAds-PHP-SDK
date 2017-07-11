<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an app ad extension that can be included in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/dn817898(v=msads.110).aspx AppAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class AppAdExtension extends AdExtension
    {
        public $AppPlatform;
        public $AppStoreId;
        public $DestinationUrl;
        public $DisplayText;
        public $FinalAppUrls;
        public $FinalMobileUrls;
        public $FinalUrls;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

}
