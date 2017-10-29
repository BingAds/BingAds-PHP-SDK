<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Represents a date.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/date?version=11 Date Data Object
     * 
     * @used-by AdGroup
     * @used-by Schedule
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

}
