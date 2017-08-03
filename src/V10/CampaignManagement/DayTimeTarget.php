<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of days of the week and time range to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dn743766(v=msads.100).aspx DayTimeTarget Data Object
     * 
     * @uses DayTimeTargetBid
     * @used-by Target
     */
    final class DayTimeTarget
    {
        /**
         * An array of DayTimeTargetBid objects that each specify the day of the week and time to target with bid adjustment to apply to the base bid.
         * @var DayTimeTargetBid[]
         */
        public $Bids;
    }

}
