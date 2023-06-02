<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the multiplier by which to adjust your base bid for the corresponding criterion.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/bidmultiplier?view=bingads-13 BidMultiplier Data Object
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
