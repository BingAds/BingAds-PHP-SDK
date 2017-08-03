<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that can be used to show ads to users during a specific day and time range.
     * @link http://msdn.microsoft.com/en-us/library/mt807665(v=msads.110).aspx DayTimeCriterion Data Object
     * 
     * @uses Day
     * @uses Minute
     */
    final class DayTimeCriterion extends Criterion
    {
        public $Day;
        public $FromHour;
        public $FromMinute;
        public $ToHour;
        public $ToMinute;
    }

}
