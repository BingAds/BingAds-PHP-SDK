<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The app setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/appsetting?view=bingads-13 AppSetting Data Object
     * 
     * @uses AppStore
     */
    final class AppSetting extends Setting
    {
        /**
         * The unique identifier of the mobile app.
         * @var string
         */
        public $AppId;

        /**
         * The app store where the app is distributed.
         * @var AppStore
         */
        public $AppStore;
    }

}
