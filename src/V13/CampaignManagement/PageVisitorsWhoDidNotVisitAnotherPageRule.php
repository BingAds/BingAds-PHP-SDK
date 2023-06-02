<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a page visitors who did not visit another page remarketing rule.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/pagevisitorswhodidnotvisitanotherpagerule?view=bingads-13 PageVisitorsWhoDidNotVisitAnotherPageRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsWhoDidNotVisitAnotherPageRule extends RemarketingRule
    {
        /**
         * The list of rule item groups that you want applied as exclusions to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $ExcludeRuleItemGroups;

        /**
         * The list of rule item groups that you want applied to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $IncludeRuleItemGroups;
    }

}
