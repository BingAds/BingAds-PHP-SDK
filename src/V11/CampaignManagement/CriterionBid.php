<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a base class for criterion bids.
     * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.110).aspx CriterionBid Data Object
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
