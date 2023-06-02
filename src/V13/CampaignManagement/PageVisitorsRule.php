<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a page visitors remarketing rule.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/pagevisitorsrule?view=bingads-13 PageVisitorsRule Data Object
     * 
     * @uses NormalForm
     * @uses RuleItemGroup
     */
    final class PageVisitorsRule extends RemarketingRule
    {
        /**
         * Determines whether the rule item groups are evaluated based on conjunctive normal form (CNF) or disjunctive normal form (DNF).
         * @var NormalForm
         */
        public $NormalForm;

        /**
         * The list of rule item groups that you want applied to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $RuleItemGroups;
    }

}
