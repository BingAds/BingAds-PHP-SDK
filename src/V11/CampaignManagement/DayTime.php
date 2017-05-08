<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a day of the week and time range for ad extension scheduling.
     * @link http://msdn.microsoft.com/en-us/library/mt763245(v=msads.110).aspx DayTime Data Object
     * 
     * @uses Day
     * @uses Minute
     * @used-by Schedule
     */
    final class DayTime
    {
        /**
         * The scheduled day of week.
         * @var Day
         */
        public $Day;

        /**
         * The scheduled end hour.
         * @var integer
         */
        public $EndHour;

        /**
         * The scheduled end minute.
         * @var Minute
         */
        public $EndMinute;

        /**
         * The scheduled start hour.
         * @var integer
         */
        public $StartHour;

        /**
         * The scheduled start minute.
         * @var Minute
         */
        public $StartMinute;
    }

}
