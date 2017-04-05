<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a specific age target range with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.100).aspx AgeTargetBid Data Object
     * 
     * @uses AgeRange
     * @used-by AgeTarget
     */
    final class AgeTargetBid
    {
        /**
         * The age range to target.
         * @var AgeRange
         */
        public $Age;

        /**
         * The percent amount used to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;
    }

}
