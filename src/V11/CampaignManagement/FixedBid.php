<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the fixed bid to use in the auction.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/fixedbid?version=11 FixedBid Data Object
     */
    final class FixedBid extends CriterionBid
    {
        /**
         * The bid value.
         * @var double
         */
        public $Amount;
    }

}
