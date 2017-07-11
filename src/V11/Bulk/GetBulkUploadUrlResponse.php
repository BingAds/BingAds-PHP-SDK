<?php
// Generated on 7/10/2017 3:08:21 PM

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
