<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of age ranges to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.100).aspx AgeTarget Data Object
     * 
     * @uses AgeTargetBid
     * @used-by Target
     */
    final class AgeTarget
    {
        /**
         * An array of of age ranges to target with bid adjustments.
         * @var AgeTargetBid[]
         */
        public $Bids;
    }

}
