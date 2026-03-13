<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreportbygoalids?view=bingads-13 GetOfflineConversionReportByGoalIds Request Object
     * 
     * @uses OfflineConversionUploadChannel
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReportByGoalIds
     */
    final class GetOfflineConversionReportByGoalIdsRequest
    {
        /**
         * Reserved.
         * @var \DateTime
         */
        public $StartDateUtc;

        /**
         * Reserved.
         * @var \DateTime
         */
        public $EndDateUtc;

        /**
         * Reserved.
         * @var integer[]
         */
        public $GoalIds;

        /**
         * Reserved.
         * @var OfflineConversionUploadChannel
         */
        public $UploadChannelFilter;
    }
}
