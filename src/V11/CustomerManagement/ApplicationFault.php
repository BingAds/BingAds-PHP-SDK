<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the base object from which all fault detail objects derive.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/applicationfault?view=bingads-11 ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

}
