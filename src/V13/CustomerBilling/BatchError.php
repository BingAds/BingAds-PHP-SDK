<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a Customer Billing batch error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link https://docs.microsoft.com/en-us/advertising/customer-billing-service/batcherror?view=bingads-13 BatchError Data Object
     * 
     * @used-by ApiBatchFault
     * @used-by DispatchCouponsResponse
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
