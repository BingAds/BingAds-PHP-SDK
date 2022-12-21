<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/ratebid?view=bingads-13 RateBid Data Object
     * 
     * @uses RateAmount
     * @used-by AdGroup
     */
    final class RateBid extends CriterionBid
    {
        /**
         * Reserved.
         * @var RateAmount
         */
        public $RateAmount;
    }

}
