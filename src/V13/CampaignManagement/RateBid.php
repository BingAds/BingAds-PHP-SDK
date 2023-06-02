<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the rate bid.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/ratebid?view=bingads-13 RateBid Data Object
     * 
     * @uses RateAmount
     * @used-by AdGroup
     */
    final class RateBid extends CriterionBid
    {
        /**
         * Defines an object that represents the rate amount.
         * @var RateAmount
         */
        public $RateAmount;
    }

}
