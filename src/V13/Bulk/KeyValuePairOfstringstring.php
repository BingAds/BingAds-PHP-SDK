<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
     * @link https://docs.microsoft.com/en-us/advertising/bulk-service/keyvaluepairofstringstring?view=bingads-13 KeyValuePairOfstringstring Data Object
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
