<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adrotationtype?view=bingads-12 AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
    final class AdRotationType
    {
        /** Bing Ads prioritizes the ad from the ad group that appears to have the best chance of performing well, based on auction characteristics or factors, such as keyword, search term, device or location. */
        const OptimizeForClicks = 'OptimizeForClicks';

        /** Bing Ads provides more balance in rotation between your ads. */
        const RotateAdsEvenly = 'RotateAdsEvenly';
    }

}
