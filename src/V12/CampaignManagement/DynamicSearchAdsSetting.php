<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the campaign level settings for a Dynamic Search Ads campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/dynamicsearchadssetting?view=bingads-12 DynamicSearchAdsSetting Data Object
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
         * The language of the website pages that you want to target for dynamic search ads.
         * @var string
         */
        public $Language;

        /**
         * Reserved for future use.
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
