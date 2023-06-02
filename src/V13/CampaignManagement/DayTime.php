<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a day of the week and time range for ad extension scheduling.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/daytime?view=bingads-13 DayTime Data Object
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
