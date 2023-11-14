<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the PerformanceMaxSetting object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/performancemaxsetting?view=bingads-13 PerformanceMaxSetting Data Object
     */
    final class PerformanceMaxSetting extends Setting
    {
        /**
         * If false, then the entire domain will be targeted, and ad assets will be dynamically generated to match landing page content.
         * @var boolean
         */
        public $FinalUrlExpansionOptOut;

        /**
         * Reserved.
         * @var integer[]
         */
        public $PageFeedIds;
    }

}
