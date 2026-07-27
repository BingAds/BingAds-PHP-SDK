<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for a container that stores offline conversion metrics for a specific goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlinegoalconversionsummary?view=bingads-13 OfflineGoalConversionSummary Data Object
     * 
     * @uses OfflineConversionAlert
     * @uses OfflineGoalDailySummary
     * @used-by GetOfflineConversionReportByGoalIdsResponse
     */
    final class OfflineGoalConversionSummary
    {
        /**
         * The unique identifier for the conversion goal.
         * @var integer
         */
        public $GoalId;

        /**
         * The user-defined name of the conversion goal.
         * @var string
         */
        public $ConversionName;

        /**
         * The total number of successful conversions attributed during the requested period.
         * @var integer
         */
        public $OverallSuccessCount;

        /**
         * The total number of conversions that couldn't be attributed to a click or valid goal.
         * @var integer
         */
        public $OverallUnattributedCount;

        /**
         * The ratio of successful conversions to total uploads (Success / Total), represented with up to 6 decimal places.
         * @var float
         */
        public $OverallSuccessRate;

        /**
         * A collection of aggregated error reasons explaining why conversions were unattributed.
         * @var OfflineConversionAlert[]
         */
        public $OverallAlerts;

        /**
         * A breakdown of performance metrics for each individual day within the requested range.
         * @var OfflineGoalDailySummary[]
         */
        public $DailySummaries;
    }

}
