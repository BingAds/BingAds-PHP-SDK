<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a biddable criterion that you want applied to the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/biddablecampaigncriterion?view=bingads-11 BiddableCampaignCriterion Data Object
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
