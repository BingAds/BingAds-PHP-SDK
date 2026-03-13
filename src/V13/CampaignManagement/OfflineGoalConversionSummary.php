<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlinegoalconversionsummary?view=bingads-13 OfflineGoalConversionSummary Data Object
     * 
     * @uses OfflineConversionAlert
     * @uses OfflineGoalDailySummary
     * @used-by GetOfflineConversionReportByGoalIdsResponse
     */
    final class OfflineGoalConversionSummary
    {
        /**
         * Reserved.
         * @var integer
         */
        public $GoalId;

        /**
         * Reserved.
         * @var string
         */
        public $ConversionName;

        /**
         * Reserved.
         * @var integer
         */
        public $OverallSuccessCount;

        /**
         * Reserved.
         * @var integer
         */
        public $OverallUnattributedCount;

        /**
         * Reserved.
         * @var float
         */
        public $OverallSuccessRate;

        /**
         * Reserved.
         * @var OfflineConversionAlert[]
         */
        public $OverallAlerts;

        /**
         * Reserved.
         * @var OfflineGoalDailySummary[]
         */
        public $DailySummaries;
    }

}
