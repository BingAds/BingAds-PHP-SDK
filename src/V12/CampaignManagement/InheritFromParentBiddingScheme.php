<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines an object that represents the inherit from parent bid strategy type.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/inheritfromparentbiddingscheme?view=bingads-12 InheritFromParentBiddingScheme Data Object
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
