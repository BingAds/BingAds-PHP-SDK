<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/getbulkuploadurl?view=bingads-12 GetBulkUploadUrl Response Object
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
         * The URL where you may submit your bulk upload file with  HTTP POST.
         * @var string
         */
        public $UploadUrl;
    }
}
