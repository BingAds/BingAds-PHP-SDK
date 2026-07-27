<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves offline conversion statistics and diagnostics for your accounts.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreportbygoalids?view=bingads-13 GetOfflineConversionReportByGoalIds Request Object
     * 
     * @uses OfflineConversionUploadChannel
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReportByGoalIds
     */
    final class GetOfflineConversionReportByGoalIdsRequest
    {
        /**
         * The start date of the report range in Coordinated Universal Time (UTC).
         * @var \DateTime
         */
        public $StartDateUtc;

        /**
         * The end date of the report range in Coordinated Universal Time (UTC).
         * @var \DateTime
         */
        public $EndDateUtc;

        /**
         * An array of conversion goal IDs used to filter the report.
         * @var integer[]
         */
        public $GoalIds;

        /**
         * A bitwise combination of upload channel flags.
         * @var OfflineConversionUploadChannel
         */
        public $UploadChannelFilter;
    }
}
