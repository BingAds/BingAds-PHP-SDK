<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Downloads settings and performance data for all of the account's campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/downloadcampaignsbyaccountids?view=bingads-12 DownloadCampaignsByAccountIds Request Object
     * 
     * @uses CompressionType
     * @uses DataScope
     * @uses DownloadEntity
     * @uses DownloadFileType
     * @uses PerformanceStatsDateRange
     * @used-by BingAdsBulkService::DownloadCampaignsByAccountIds
     */
    final class DownloadCampaignsByAccountIdsRequest
    {
        /**
         * The identifier of the account that contains the campaign data to download.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The compression type of the download file.
         * @var CompressionType
         */
        public $CompressionType;

        /**
         * You may include quality score data such as ad relevance, in addition to entity data such as campaign settings.
         * @var DataScope
         */
        public $DataScope;

        /**
         * The entities to include in the download.
         * @var DownloadEntity[]
         */
        public $DownloadEntities;

        /**
         * The file type of the download file.
         * @var DownloadFileType
         */
        public $DownloadFileType;

        /**
         * The format for records of the download file.
         * @var string
         */
        public $FormatVersion;

        /**
         * The last time that you requested a download.
         * @var \DateTime
         */
        public $LastSyncTimeInUTC;

        /**
         * This element is not supported in Bing Ads API Version 12, and will be removed in a future version.
         * @var PerformanceStatsDateRange
         */
        public $PerformanceStatsDateRange;
    }
}
