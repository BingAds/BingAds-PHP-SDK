<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Defines the base object from which all Customer Billing fault detail objects derive.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/applicationfault?view=bingads-13 ApplicationFault Data Object
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
