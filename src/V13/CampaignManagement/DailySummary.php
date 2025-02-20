<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a data object for a summary of the offline conversion reports for the day.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/dailysummary?view=bingads-13 DailySummary Data Object
     * 
     * @used-by GetOfflineConversionReportsResponse
     */
    final class DailySummary
    {
        /**
         * The number of failed conversions.
         * @var integer
         */
        public $FailureCount;

        /**
         * The URL of the report.
         * @var string
         */
        public $FileUrl;

        /**
         * The expiry time of the report in UTC time.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The number of successful conversions.
         * @var integer
         */
        public $SuccessCount;

        /**
         * The date of the report in local time.
         * @var \DateTime
         */
        public $UploadDate;
    }

}
