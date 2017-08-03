<?php

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.100).aspx GetBulkUploadStatus Request Object
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
