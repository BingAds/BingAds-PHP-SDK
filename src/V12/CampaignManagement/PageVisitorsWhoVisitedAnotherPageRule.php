<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a page visitors who visited another page remarketing rule.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/pagevisitorswhovisitedanotherpagerule?view=bingads-12 PageVisitorsWhoVisitedAnotherPageRule Data Object
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
