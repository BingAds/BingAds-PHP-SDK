<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of genders to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.100).aspx GenderTarget Data Object
     * 
     * @uses GenderTargetBid
     * @used-by Target
     */
    final class GenderTarget
    {
        /**
         * An array of genders to target with bid adjustments.
         * @var GenderTargetBid[]
         */
        public $Bids;
    }

}
