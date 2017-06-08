<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines the targeting setting that is applicable for all remarketing lists that are associated with a given ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt735046(v=msads.100).aspx RemarketingTargetingSetting Value Set
     * 
     * @used-by AdGroup
     */
    final class RemarketingTargetingSetting
    {
        /** Show ads to people searching for your ad, with the option to change the bid amount for people included in the remarketing list. */
        const BidOnly = 'BidOnly';

        /** Show ads only to people included in the remarketing list, with the option to change the bid amount. */
        const TargetAndBid = 'TargetAndBid';
    }

}
