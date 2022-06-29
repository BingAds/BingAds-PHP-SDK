<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Set the auto-apply recommendations opt-in status for a single account.
     * @link https://docs.microsoft.com/en-us/advertising/ad-insight-service/setautoapplyoptinstatus?view=bingads-13 SetAutoApplyOptInStatus Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsAdInsightService::SetAutoApplyOptInStatus
     */
    final class SetAutoApplyOptInStatusResponse
    {
        /**
         * An array BatchError that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
