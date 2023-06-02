<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Set the auto-apply recommendations opt-in status for a single account.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/setautoapplyoptinstatus?view=bingads-13 SetAutoApplyOptInStatus Request Object
     * 
     * @used-by BingAdsAdInsightService::SetAutoApplyOptInStatus
     */
    final class SetAutoApplyOptInStatusRequest
    {
        /**
         * A string array which identifies auto-apply opt-in status of the given recommendation types in the request.
         * @var string[]
         */
        public $AutoApplyOptInStatusInputs;
    }
}
