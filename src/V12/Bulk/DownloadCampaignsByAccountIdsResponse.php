<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Downloads settings and performance data for all of the account's campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/downloadcampaignsbyaccountids?view=bingads-12 DownloadCampaignsByAccountIds Response Object
     * 
     * @used-by BingAdsBulkService::DownloadCampaignsByAccountIds
     */
    final class DownloadCampaignsByAccountIdsResponse
    {
        /**
         * The identifier of the download request.
         * @var string
         */
        public $DownloadRequestId;
    }
}
