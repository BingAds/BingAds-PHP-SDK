<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the target ROAS bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/targetroasbiddingscheme?view=bingads-13 TargetRoasBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetRoasBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click that you want to spend.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * The target return on ad spend (ROAS) that you want used by Microsoft Advertising to maximize conversions.
         * @var double
         */
        public $TargetRoas;
    }

}
