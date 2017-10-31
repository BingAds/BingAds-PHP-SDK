<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a base class for criterion bids.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/criterionbid?view=bingads-11 CriterionBid Data Object
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
