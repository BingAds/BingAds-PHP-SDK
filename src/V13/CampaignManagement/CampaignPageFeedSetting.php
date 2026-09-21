<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the campaign page feed setting data object.
     * @link https://learn.microsoft.com/en-us/advertising/campaign-management-service/campaignpagefeedsetting?view=bingads-13 CampaignPageFeedSetting Data Object
     */
    final class CampaignPageFeedSetting extends Setting
    {
        /**
         * The page feed IDs.
         * @var integer[]
         */
        public $PageFeedIds;
    }

}
