<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlineconversionalert?view=bingads-13 OfflineConversionAlert Data Object
     * 
     * @uses OfflineConversionUnattributedReason
     * @used-by OfflineGoalConversionSummary
     * @used-by OfflineGoalDailySummary
     */
    final class OfflineConversionAlert
    {
        /**
         * Reserved.
         * @var OfflineConversionUnattributedReason
         */
        public $UnattributedReason;

        /**
         * Reserved.
         * @var integer
         */
        public $Count;
    }

}
