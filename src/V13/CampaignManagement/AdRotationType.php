<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adrotationtype?view=bingads-13 AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
    final class AdRotationType
    {
        /** Microsoft Advertising prioritizes the ad from the ad group that appears to have the best chance of performing well, based on auction characteristics or factors, such as keyword, search term, device or location. */
        const OptimizeForClicks = 'OptimizeForClicks';

        /** Microsoft Advertising provides more balance in rotation between your ads. */
        const RotateAdsEvenly = 'RotateAdsEvenly';
    }

}
