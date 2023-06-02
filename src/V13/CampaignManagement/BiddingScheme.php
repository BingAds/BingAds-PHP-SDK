<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the base object of a bidding scheme for how you want to manage your bids.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/biddingscheme?view=bingads-13 BiddingScheme Data Object
     * 
     * @used-by AdGroup
     * @used-by BidStrategy
     * @used-by Campaign
     * @used-by Keyword
     */
    class BiddingScheme
    {
        /**
         * The type of bidding scheme that is set for this campaign, ad group, or keyword.
         * @var string
         */
        public $Type;
    }

}
