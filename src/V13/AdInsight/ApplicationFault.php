<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines the base object from which all Ad Insight fault detail objects derive.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/applicationfault?view=bingads-13 ApplicationFault Data Object
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
