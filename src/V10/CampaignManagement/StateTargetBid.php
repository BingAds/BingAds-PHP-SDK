<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a sub geography, specifically a state or province to target, and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/dd796942(v=msads.100).aspx StateTargetBid Data Object
     * 
     * @used-by StateTarget
     */
    final class StateTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted sub geography.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The sub geography to target.
         * @var string
         */
        public $State;
    }

}
