<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an object that contains a list of remarketing list rule items that apply to the same visited page.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/ruleitemgroup?view=bingads-13 RuleItemGroup Data Object
     * 
     * @uses RuleItem
     * @used-by PageVisitorsRule
     * @used-by PageVisitorsWhoDidNotVisitAnotherPageRule
     * @used-by PageVisitorsWhoVisitedAnotherPageRule
     */
    final class RuleItemGroup
    {
        /**
         * The list of rule items.
         * @var RuleItem[]
         */
        public $Items;
    }

}
