<?php
// Generated on 7/10/2017 3:08:21 PM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.110).aspx GetBulkUploadStatus Request Object
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
