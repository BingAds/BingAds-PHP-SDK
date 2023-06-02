<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the inherit from parent bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/inheritfromparentbiddingscheme?view=bingads-13 InheritFromParentBiddingScheme Data Object
     */
    final class InheritFromParentBiddingScheme extends BiddingScheme
    {
        /**
         * The type of bidding scheme (a.k.a.
         * @var string
         */
        public $InheritedBidStrategyType;
    }

}
