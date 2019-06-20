<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved for future use.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/targetroasbiddingscheme?view=bingads-13 TargetRoasBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetRoasBiddingScheme extends BiddingScheme
    {
        /**
         * Reserved for future use.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * Reserved for future use.
         * @var double
         */
        public $TargetRoas;
    }

}
