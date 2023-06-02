<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines the base object from which all Bulk fault detail objects derive.
     * @link https:/learn.microsoft.com/advertising/bulk-service/applicationfault?view=bingads-13 ApplicationFault Data Object
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
