<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users during a specific day and time range.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/daytimecriterion?view=bingads-12 DayTimeCriterion Data Object
     * 
     * @uses Day
     * @uses Minute
     */
    final class DayTimeCriterion extends Criterion
    {
        /**
         * The day of the week to target.
         * @var Day
         */
        public $Day;

        /**
         * The starting hour range to target.
         * @var integer
         */
        public $FromHour;

        /**
         * The starting minute of the hour to target.
         * @var Minute
         */
        public $FromMinute;

        /**
         * The ending hour range to target.
         * @var integer
         */
        public $ToHour;

        /**
         * The ending minute of the hour to target.
         * @var Minute
         */
        public $ToMinute;
    }

}
