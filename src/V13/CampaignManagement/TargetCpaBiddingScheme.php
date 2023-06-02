<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that represents the target CPA bid strategy type.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/targetcpabiddingscheme?view=bingads-13 TargetCpaBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetCpaBiddingScheme extends BiddingScheme
    {
        /**
         * The maximum cost per click that you want to spend.
         * @var Bid
         */
        public $MaxCpc;

        /**
         * The target cost per acquisition (CPA) that you want used by Microsoft Advertising to maximize conversions.
         * @var double
         */
        public $TargetCpa;
    }

}
