<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/getbulkuploadstatus?view=bingads-11 GetBulkUploadStatus Request Object
     * 
     * @used-by BingAdsBulkService::GetBulkUploadStatus
     */
    final class GetBulkUploadStatusRequest
    {
        /**
         * The identifier of the upload request.
         * @var string
         */
        public $RequestId;
    }
}
