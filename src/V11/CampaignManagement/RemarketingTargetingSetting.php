<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * The targeting setting that is applicable for all audiences e.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/remarketingtargetingsetting?view=bingads-11 RemarketingTargetingSetting Value Set
     * 
     * @used-by AdGroup
     */
    final class RemarketingTargetingSetting
    {
        /** Show ads to people searching for your ad, with the option to change the bid amount for people included in the audience. */
        const BidOnly = 'BidOnly';

        /** Show ads only to people included in the audience, with the option to change the bid amount. */
        const TargetAndBid = 'TargetAndBid';
    }

}
