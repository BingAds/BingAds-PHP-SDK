<?php
// Generated on 5/7/2017 5:48:19 AM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.110).aspx GetBulkUploadUrl Response Object
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
