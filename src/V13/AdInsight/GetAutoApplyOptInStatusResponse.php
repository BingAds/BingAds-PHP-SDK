<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Get the auto-apply recommendations opt-in status for a single account.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/getautoapplyoptinstatus?view=bingads-13 GetAutoApplyOptInStatus Response Object
     * 
     * @uses AutoApplyRecommendationsInfo
     * @used-by BingAdsAdInsightService::GetAutoApplyOptInStatus
     */
    final class GetAutoApplyOptInStatusResponse
    {
        /**
         * An array of AutoApplyRecommendationsInfo object which identifies auto-apply opt-in status for the given recommendation types in the request.
         * @var AutoApplyRecommendationsInfo[]
         */
        public $AutoApplyRecommendationsStatus;
    }
}
