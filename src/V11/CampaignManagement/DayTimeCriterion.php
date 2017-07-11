<?php
// Generated on 7/10/2017 3:08:23 PM

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
