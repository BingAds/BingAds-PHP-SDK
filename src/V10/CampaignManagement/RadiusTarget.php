<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a list of geographical radius targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.100).aspx RadiusTarget Data Object
     * 
     * @uses RadiusTargetBid
     * @used-by LocationTarget
     */
    final class RadiusTarget
    {
        /**
         * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the incremental bid percentages to apply to the base bid.
         * @var RadiusTargetBid[]
         */
        public $Bids;
    }

}
