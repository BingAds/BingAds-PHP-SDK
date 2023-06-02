<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Downloads settings and performance data for the specified campaigns.
     * @link https:/learn.microsoft.com/advertising/bulk-service/downloadcampaignsbycampaignids?view=bingads-13 DownloadCampaignsByCampaignIds Request Object
     * 
     * @uses CampaignScope
     * @uses CompressionType
     * @uses DataScope
     * @uses DownloadEntity
     * @uses DownloadFileType
     * @used-by BingAdsBulkService::DownloadCampaignsByCampaignIds
     */
    final class DownloadCampaignsByCampaignIdsRequest
    {
        /**
         * The campaigns to download.
         * @var CampaignScope[]
         */
        public $Campaigns;

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
         * The format of the download file.
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
