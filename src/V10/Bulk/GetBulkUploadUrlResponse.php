<?php
// Generated on 6/7/2017 5:54:04 AM

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.100).aspx GetBulkUploadUrl Response Object
     * 
     * @used-by BingAdsBulkService::GetBulkUploadUrl
     */
    final class GetBulkUploadUrlResponse
    {
        /**
         * The identifier of the upload request.
         * @var string
         */
        public $RequestId;

        /**
         * The URL where you may submit your bulk upload file with HTTP POST.
         * @var string
         */
        public $UploadUrl;
    }
}
