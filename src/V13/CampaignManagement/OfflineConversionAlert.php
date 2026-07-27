<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for detailed information about unattributed conversions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlineconversionalert?view=bingads-13 OfflineConversionAlert Data Object
     * 
     * @uses OfflineConversionUnattributedReason
     * @used-by OfflineGoalConversionSummary
     * @used-by OfflineGoalDailySummary
     */
    final class OfflineConversionAlert
    {
        /**
         * The specific reason for the failure.
         * @var OfflineConversionUnattributedReason
         */
        public $UnattributedReason;

        /**
         * The number of times this specific error occurred.
         * @var integer
         */
        public $Count;
    }

}
