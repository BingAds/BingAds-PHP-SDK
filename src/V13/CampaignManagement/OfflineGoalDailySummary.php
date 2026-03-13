<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlinegoaldailysummary?view=bingads-13 OfflineGoalDailySummary Data Object
     * 
     * @uses OfflineConversionAlert
     * @used-by OfflineGoalConversionSummary
     */
    final class OfflineGoalDailySummary
    {
        /**
         * Reserved.
         * @var integer
         */
        public $GoalId;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $UploadDate;

        /**
         * Reserved.
         * @var integer
         */
        public $SuccessCount;

        /**
         * Reserved.
         * @var integer
         */
        public $UnattributedCount;

        /**
         * Reserved.
         * @var float
         */
        public $SuccessRate;

        /**
         * Reserved.
         * @var OfflineConversionAlert[]
         */
        public $Alerts;
    }

}
