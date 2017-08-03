<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an object that contains a list of remarketing list rule items that apply to the same visited page.
     * @link http://msdn.microsoft.com/en-us/library/mt772360(v=msads.110).aspx RuleItemGroup Data Object
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
