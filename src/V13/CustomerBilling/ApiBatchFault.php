<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines a Customer Billing API batch fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/apibatchfault?view=bingads-13 ApiBatchFault Data Object
     * 
     * @uses BatchError
     */
    final class ApiBatchFault extends ApiFault
    {
        /**
         * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;
    }

}
