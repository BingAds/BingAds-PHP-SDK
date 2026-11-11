<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a setting that controls whether Product ads are exempt from a campaign's brand exclusions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/brandexclusionsetting?view=bingads-13 BrandExclusionSetting Data Object
     */
    final class BrandExclusionSetting extends Setting
    {
        /**
         * Determines whether Product ads are exempt from the campaign's brand exclusions.
         * @var boolean
         */
        public $ProductAdsOptOut;
    }

}
