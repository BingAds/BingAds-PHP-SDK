<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a specific gender target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.100).aspx GenderTargetBid Data Object
     * 
     * @uses GenderType
     * @used-by GenderTarget
     */
    final class GenderTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The gender to target.
         * @var GenderType
         */
        public $Gender;
    }

}
