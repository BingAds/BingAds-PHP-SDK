<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adrotationtype?version=11 AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
    final class AdRotationType
    {
        /** Favor the best performing ads. */
        const OptimizeForClicks = 'OptimizeForClicks';

        /** Rotate ads evenly into the auction. */
        const RotateAdsEvenly = 'RotateAdsEvenly';
    }

}
