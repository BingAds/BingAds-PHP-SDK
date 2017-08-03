<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an app install ad.
     * @link http://msdn.microsoft.com/en-us/library/mt712576(v=msads.100).aspx AppInstallAd Data Object
     */
    final class AppInstallAd extends Ad
    {
        public $AppPlatform;
        public $AppStoreId;
        public $Text;
        public $Title;
    }

}
