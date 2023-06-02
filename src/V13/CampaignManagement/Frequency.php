<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Determines whether an import job should be run once or scheduled on a recurring basis.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/frequency?view=bingads-13 Frequency Data Object
     * 
     * @used-by ImportJob
     */
    final class Frequency
    {
        /**
         * Represents a simplified implementation of Cron frequency.
         * @var string
         */
        public $Cron;

        /**
         * The time zone used for the import schedule.
         * @var string
         */
        public $TimeZone;

        /**
         * The scheduling frequency type.
         * @var string
         */
        public $Type;
    }

}
