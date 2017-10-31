<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a page visitors remarketing rule.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/pagevisitorsrule?view=bingads-11 PageVisitorsRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsRule extends RemarketingRule
    {
        /**
         * The list of rule item groups that you want applied to the remarketing list.
         * @var RuleItemGroup[]
         */
        public $RuleItemGroups;
    }

}
