<?php

namespace Microsoft\BingAds\V13\Reporting;

{
    /**
     * Defines a Reporting batch error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https:/learn.microsoft.com/advertising/reporting-service/batcherror?view=bingads-13 BatchError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class BatchError
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
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
