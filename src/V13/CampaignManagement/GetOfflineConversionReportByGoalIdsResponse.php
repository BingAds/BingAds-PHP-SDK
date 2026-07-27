<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves offline conversion statistics and diagnostics for your accounts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreportbygoalids?view=bingads-13 GetOfflineConversionReportByGoalIds Response Object
     * 
     * @uses OfflineGoalConversionSummary
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReportByGoalIds
     */
    final class GetOfflineConversionReportByGoalIdsResponse
    {
        /**
         * An array containing daily conversion performance summaries, grouped by individual Goal ID.
         * @var OfflineGoalConversionSummary[]
         */
        public $OfflineGoalConversionSummaries;

        /**
         * An array of error objects for specific Goal IDs that failed to retrieve data.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
