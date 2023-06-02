<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an app install conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appinstallgoal?view=bingads-13 AppInstallGoal Data Object
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
