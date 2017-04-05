<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a metropolitan area to target and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.100).aspx MetroAreaTargetBid Data Object
     * 
     * @used-by MetroAreaTarget
     */
    final class MetroAreaTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The metropolitan area to target.
         * @var string
         */
        public $MetroArea;
    }

}
