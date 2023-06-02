<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a base class for criterion bids.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/criterionbid?view=bingads-13 CriterionBid Data Object
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
