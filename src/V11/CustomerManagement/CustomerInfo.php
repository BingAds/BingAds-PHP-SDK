<?php
// Generated on 6/7/2017 5:55:25 AM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a customer identification object that contains information that identifies a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.110).aspx CustomerInfo Data Object
     * 
     * @used-by AdvertiserAccount
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
