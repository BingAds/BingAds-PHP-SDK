<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the multiplier by which to adjust your base bid for the corresponding criterion.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/bidmultiplier?view=bingads-11 BidMultiplier Data Object
     */
    final class BidMultiplier extends CriterionBid
    {
        /**
         * The percentage amount that you want to adjust the bid for the corresponding criterion.
         * @var double
         */
        public $Multiplier;
    }

}
