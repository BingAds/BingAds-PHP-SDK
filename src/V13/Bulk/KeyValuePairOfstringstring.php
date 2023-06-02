<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * The key and value pair of string and string values defined by the Bulk service.
     * @link https:/learn.microsoft.com/advertising/bulk-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
     * 
     * @used-by BatchError
     * @used-by GetBulkDownloadStatusResponse
     * @used-by GetBulkUploadStatusResponse
     */
    final class KeyValuePairOfstringstring
    {
        /**
         * The name of the setting.
         * @var string
         */
        public $key;

        /**
         * The value of the setting.
         * @var string
         */
        public $value;
    }

}
