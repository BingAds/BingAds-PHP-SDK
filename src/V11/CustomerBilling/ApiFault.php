<?php

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link https://docs.microsoft.com/en-us/bingads/customer-billing-service/apifault?version=11 ApiFault Data Object
     * 
     * @uses OperationError
     */
    class ApiFault extends ApplicationFault
    {
        /**
         * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

}
