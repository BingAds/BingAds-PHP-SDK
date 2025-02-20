<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the offline conversion reports in the requested date range.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getofflineconversionreports?view=bingads-13 GetOfflineConversionReports Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetOfflineConversionReports
     */
    final class GetOfflineConversionReportsRequest
    {
        /**
         * The start date in UTC time.
         * @var \DateTime
         */
        public $StartDateUtc;

        /**
         * The end date in UTC time.
         * @var \DateTime
         */
        public $EndDateUtc;
    }
}
