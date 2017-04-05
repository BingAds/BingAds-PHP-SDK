<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the start and end date ranges for ad extension scheduling.
     * @link http://msdn.microsoft.com/en-us/library/mt763244(v=msads.100).aspx Schedule Data Object
     * 
     * @uses DayTime
     * @uses Date
     * @used-by AdExtension
     * @used-by SiteLink
     */
    final class Schedule
    {
        /**
         * The list of day and time ranges.
         * @var DayTime[]
         */
        public $DayTimeRanges;

        /**
         * The scheduled end date.
         * @var Date
         */
        public $EndDate;

        /**
         * The scheduled start date.
         * @var Date
         */
        public $StartDate;

        /**
         * Determines whether to use the account time zone or the time zone of the search user where the ads could be delivered.
         * @var boolean
         */
        public $UseSearcherTimeZone;
    }

}
