<?php
// Generated on 6/7/2017 5:55:37 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the multiplier by which to adjust your base bid for the corresponding criterion.
     * @link http://msdn.microsoft.com/en-us/library/mt807662(v=msads.110).aspx BidMultiplier Data Object
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
