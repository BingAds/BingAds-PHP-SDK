<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for the granular, date-specific metrics for a conversion goal.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/offlinegoaldailysummary?view=bingads-13 OfflineGoalDailySummary Data Object
     * 
     * @uses OfflineConversionAlert
     * @used-by OfflineGoalConversionSummary
     */
    final class OfflineGoalDailySummary
    {
        /**
         * The unique identifier for the conversion goal.
         * @var integer
         */
        public $GoalId;

        /**
         * The specific date the conversions were processed.
         * @var \DateTime
         */
        public $UploadDate;

        /**
         * Successful conversions for this specific date.
         * @var integer
         */
        public $SuccessCount;

        /**
         * Unattributed or failed conversions for this specific date.
         * @var integer
         */
        public $UnattributedCount;

        /**
         * The success rate for this specific date, up to 6 decimal places.
         * @var float
         */
        public $SuccessRate;

        /**
         * Error alerts specific to this date's uploads.
         * @var OfflineConversionAlert[]
         */
        public $Alerts;
    }

}
