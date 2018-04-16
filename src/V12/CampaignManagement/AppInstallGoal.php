<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an app install conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appinstallgoal?view=bingads-12 AppInstallGoal Data Object
     */
    final class AppInstallGoal extends ConversionGoal
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
    }

}
