<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines a customer identification object that contains information that identifies a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.90).aspx CustomerInfo Data Object
     * 
     * @used-by GetCustomersInfoResponse
     */
    final class CustomerInfo
    {
        /**
         * The system generated identifier of the customer.
         * @var integer
         */
        public $Id;

        /**
         * The name of the customer.
         * @var string
         */
        public $Name;
    }

}
