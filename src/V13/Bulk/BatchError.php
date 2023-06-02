<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines a Bulk batch error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/bulk-service/batcherror?view=bingads-13 BatchError Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by ApiFaultDetail
     */
    class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * Reserved for future use.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;

        /**
         * Reserved for future use.
         * @var string
         */
        public $Type;
    }

}
