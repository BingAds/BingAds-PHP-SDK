<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a remarketing list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/remarketinglist?view=bingads-13 RemarketingList Data Object
     * 
     * @uses RemarketingRule
     */
    final class RemarketingList extends Audience
    {
        /**
         * A rule includes conditions used to determine who to add to your remarketing list.
         * @var RemarketingRule
         */
        public $Rule;

        /**
         * The Bing Ads identifier of the Universal Event Tracking (UET) tag that is used with the remarketing list.
         * @var integer
         */
        public $TagId;
    }

}
