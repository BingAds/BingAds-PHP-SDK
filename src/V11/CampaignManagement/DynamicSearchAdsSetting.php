<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the campaign level settings for a Dynamic Search Ads campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/dynamicsearchadssetting?version=11 DynamicSearchAdsSetting Data Object
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
    }

}
