<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the offline conversion reports in the requested date range.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreports?view=bingads-13 GetOfflineConversionReports Response Object
     * 
     * @uses DailySummary
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReports
     */
    final class GetOfflineConversionReportsResponse
    {
        /**
         * A summary of the reports for the day.
         * @var DailySummary[]
         */
        public $DailySummaries;
    }
}
