<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Reserved for future use.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/actionadextension?view=bingads-12 ActionAdExtension Data Object
     * 
     * @uses ActionAdExtensionActionType
     * @uses CustomParameters
     */
    final class ActionAdExtension extends AdExtension
    {
        /**
         * Reserved.
         * @var ActionAdExtensionActionType
         */
        public $ActionType;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved.
         * @var string
         */
        public $Language;

        /**
         * Reserved.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

}
