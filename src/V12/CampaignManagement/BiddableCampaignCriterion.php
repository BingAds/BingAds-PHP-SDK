<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a biddable criterion that you want applied to the specified campaign.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/biddablecampaigncriterion?view=bingads-12 BiddableCampaignCriterion Data Object
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
