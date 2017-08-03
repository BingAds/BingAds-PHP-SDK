<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a page visitors who visited another page remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772361(v=msads.100).aspx PageVisitorsWhoVisitedAnotherPageRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsWhoVisitedAnotherPageRule extends RemarketingRule
    {
        /**
         * The list of rule item groups related to other pages the audience visited.
         * @var RuleItemGroup[]
         */
        public $AnotherRuleItemGroups;

        /**
         * The list of rule item groups related to pages the audience visited.
         * @var RuleItemGroup[]
         */
        public $RuleItemGroups;
    }

}
