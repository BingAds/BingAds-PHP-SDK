<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Downloads settings and performance data for all of the account's campaigns.
     * @link https:/learn.microsoft.com/advertising/bulk-service/downloadcampaignsbyaccountids?view=bingads-13 DownloadCampaignsByAccountIds Request Object
     * 
     * @uses CompressionType
     * @uses DataScope
     * @uses DownloadEntity
     * @uses DownloadFileType
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
    }
}
