<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Gets the status of a bulk download request.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/getbulkdownloadstatus?view=bingads-11 GetBulkDownloadStatus Request Object
     * 
     * @used-by BingAdsBulkService::GetBulkDownloadStatus
     */
    final class GetBulkDownloadStatusRequest
    {
        /**
         * The identifier of the download request.
         * @var string
         */
        public $RequestId;
    }
}
