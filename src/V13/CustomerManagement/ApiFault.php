<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a Customer Management API fault detail object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/apifault?view=bingads-13 ApiFault Data Object
     * 
     * @uses OperationError
     */
    final class ApiFault extends ApplicationFault
    {
        /**
         * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

}
