<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an app install conversion goal.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appinstallgoal?view=bingads-11 AppInstallGoal Data Object
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
