<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines elements to specify whether the bulk service should return upload errors with their corresponding data.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/responsemode?view=bingads-13 ResponseMode Value Set
     * 
     * @used-by GetBulkUploadUrlRequest
     * @used-by UploadEntityRecordsRequest
     */
    final class ResponseMode
    {
        /** Return errors only in the bulk upload response file. */
        const ErrorsOnly = 'ErrorsOnly';

        /** Return errors and results in the bulk upload response file. */
        const ErrorsAndResults = 'ErrorsAndResults';
    }

}
