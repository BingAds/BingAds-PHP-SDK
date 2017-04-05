<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a day of the week and time range for ad extension scheduling.
     * @link http://msdn.microsoft.com/en-us/library/mt763245(v=msads.100).aspx DayTime Data Object
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
