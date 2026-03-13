<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreportbygoalids?view=bingads-13 GetOfflineConversionReportByGoalIds Response Object
     * 
     * @uses OfflineGoalConversionSummary
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReportByGoalIds
     */
    final class GetOfflineConversionReportByGoalIdsResponse
    {
        /**
         * Reserved.
         * @var OfflineGoalConversionSummary[]
         */
        public $OfflineGoalConversionSummaries;

        /**
         * Reserved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
