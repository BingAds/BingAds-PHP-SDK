<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link https:/learn.microsoft.com/advertising/bulk-service/getbulkuploadstatus?view=bingads-13 GetBulkUploadStatus Request Object
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
