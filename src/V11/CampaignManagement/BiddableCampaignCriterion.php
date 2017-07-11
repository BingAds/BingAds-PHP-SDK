<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a biddable criterion that you want applied to the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/mt807658(v=msads.110).aspx BiddableCampaignCriterion Data Object
     * 
     * @uses CriterionBid
     */
    final class BiddableCampaignCriterion extends CampaignCriterion
    {
        /**
         * The bid to use in the auction.
         * @var CriterionBid
         */
        public $CriterionBid;
    }

}
