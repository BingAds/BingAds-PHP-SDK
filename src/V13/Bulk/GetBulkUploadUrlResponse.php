<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/getbulkuploadurl?view=bingads-13 GetBulkUploadUrl Response Object
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
         * The URL where you may submit your bulk upload file via HTTP POST.
         * @var string
         */
        public $UploadUrl;
    }
}
