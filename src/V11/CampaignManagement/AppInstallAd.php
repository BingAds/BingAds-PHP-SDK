<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an app install ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appinstallad?version=11 AppInstallAd Data Object
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
