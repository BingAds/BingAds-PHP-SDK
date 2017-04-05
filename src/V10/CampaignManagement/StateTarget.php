<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of state targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.100).aspx StateTarget Data Object
     * 
     * @uses StateTargetBid
     * @used-by LocationTarget
     */
    final class StateTarget
    {
        /**
         * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the incremental bid percentages to apply to the base bid.
         * @var StateTargetBid[]
         */
        public $Bids;
    }

}
