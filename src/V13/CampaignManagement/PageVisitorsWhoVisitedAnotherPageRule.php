<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a page visitors who visited another page remarketing rule.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/pagevisitorswhovisitedanotherpagerule?view=bingads-13 PageVisitorsWhoVisitedAnotherPageRule Data Object
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
