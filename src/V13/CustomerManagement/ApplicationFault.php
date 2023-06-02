<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the base object from which all Customer Management fault detail objects derive.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/applicationfault?view=bingads-13 ApplicationFault Data Object
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
