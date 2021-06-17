<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the Dynamic Search Ads setting for a campaign.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/dynamicsearchadssetting?view=bingads-13 DynamicSearchAdsSetting Data Object
     * 
     * @uses DynamicSearchAdsSource
     */
    final class DynamicSearchAdsSetting extends Setting
    {
        /**
         * The domain name of the website that you want to target for dynamic search ads.
         * @var string
         */
        public $DomainName;

        /**
         * Reserved.
         * @var boolean
         */
        public $DynamicDescriptionEnabled;

        /**
         * The language of the website pages that you want to target for dynamic search ads.
         * @var string
         */
        public $Language;

        /**
         * The page feed identifiers for dynamic search ads.
         * @var integer[]
         */
        public $PageFeedIds;

        /**
         * Determines whether to use Bing's index, advertiser supplied URLs, or both.
         * @var DynamicSearchAdsSource
         */
        public $Source;
    }

}
