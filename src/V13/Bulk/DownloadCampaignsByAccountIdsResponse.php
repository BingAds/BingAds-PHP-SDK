<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Downloads settings and performance data for all of the account's campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/downloadcampaignsbyaccountids?view=bingads-13 DownloadCampaignsByAccountIds Response Object
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
