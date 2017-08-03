<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that represents the target CPA bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709094(v=msads.110).aspx TargetCpaBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetCpaBiddingScheme extends BiddingScheme
    {
        public $MaxCpc;
        public $TargetCpa;
    }

}
