<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an app install ad.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/appinstallad?view=bingads-13 AppInstallAd Data Object
     */
    final class AppInstallAd extends Ad
    {
        /**
         * The application platform.
         * @var string
         */
        public $AppPlatform;

        /**
         * The application identifier provided by the app store.
         * @var string
         */
        public $AppStoreId;

        /**
         * The ad copy.
         * @var string
         */
        public $Text;

        /**
         * The title of the ad.
         * @var string
         */
        public $Title;
    }

}
