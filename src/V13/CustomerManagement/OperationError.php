<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a Customer Management operation error object that contains the details that explain why the service operation failed.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/operationerror?view=bingads-13 OperationError Data Object
     * 
     * @used-by ApiFault
     * @used-by AddClientLinksResponse
     * @used-by UpdateClientLinksResponse
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
