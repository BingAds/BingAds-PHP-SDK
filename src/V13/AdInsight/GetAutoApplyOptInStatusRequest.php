<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Get the auto-apply recommendations opt-in status for a single account.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/getautoapplyoptinstatus?view=bingads-13 GetAutoApplyOptInStatus Request Object
     * 
     * @used-by BingAdsAdInsightService::GetAutoApplyOptInStatus
     */
    final class GetAutoApplyOptInStatusRequest
    {
        /**
         * Determines the type of recommendations that you want to get the auto-apply opt-in status for.
         * @var string[]
         */
        public $RecommendationTypesInputs;
    }
}
