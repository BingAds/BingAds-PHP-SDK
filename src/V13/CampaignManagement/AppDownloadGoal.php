<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an app download conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appdownloadgoal?view=bingads-13 AppDownloadGoal Data Object
     */
    final class AppDownloadGoal extends ConversionGoal
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
