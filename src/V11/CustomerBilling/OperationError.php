<?php
// Generated on 7/10/2017 3:08:15 PM

namespace Microsoft\BingAds\V11\CustomerBilling;

{
    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dn169103(v=msads.110).aspx OperationError Data Object
     * 
     * @used-by ApiFault
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
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
