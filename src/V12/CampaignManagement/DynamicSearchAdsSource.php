<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible targeting source values for dynamic search ads campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/dynamicsearchadssource?view=bingads-12 DynamicSearchAdsSource Value Set
     * 
     * @used-by DynamicSearchAdsSetting
     */
    final class DynamicSearchAdsSource
    {
        /** Use URLs from both Bing's index of my website and my page feed. */
        const All = 'All';

        /** Use Bing's index of my website. */
        const SystemIndex = 'SystemIndex';

        /** Use URLs from my page feed only. */
        const AdvertiserSuppliedUrls = 'AdvertiserSuppliedUrls';
    }

}
