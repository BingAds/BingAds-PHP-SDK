<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Defines elements to specify whether the bulk service should return upload errors with their corresponding data.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/responsemode?view=bingads-11 ResponseMode Value Set
     * 
     * @used-by GetBulkUploadUrlRequest
     */
    final class ResponseMode
    {
        /** Return errors only in the bulk upload response file. */
        const ErrorsOnly = 'ErrorsOnly';

        /** Return errors and results in the bulk upload response file. */
        const ErrorsAndResults = 'ErrorsAndResults';
    }

}
