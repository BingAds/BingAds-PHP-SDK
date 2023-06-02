<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the start and end date ranges for ad extension scheduling.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/schedule?view=bingads-13 Schedule Data Object
     * 
     * @uses DayTime
     * @uses Date
     * @used-by AdExtension
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
