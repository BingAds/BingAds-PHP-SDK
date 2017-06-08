<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a specific day of the week and time range to target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn743741(v=msads.100).aspx DayTimeTargetBid Data Object
     * 
     * @uses Day
     * @uses Minute
     * @used-by DayTimeTarget
     */
    final class DayTimeTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid for the specified day and time range.
         * @var integer
         */
        public $BidAdjustment;

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
