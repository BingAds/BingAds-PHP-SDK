<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a base class for criterion bids.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/criterionbid?view=bingads-13 CriterionBid Data Object
     * 
     * @used-by BiddableAdGroupCriterion
     * @used-by BiddableCampaignCriterion
     */
    class CriterionBid
    {
        /**
         * The type of criterion bid.
         * @var string
         */
        public $Type;
    }

}
