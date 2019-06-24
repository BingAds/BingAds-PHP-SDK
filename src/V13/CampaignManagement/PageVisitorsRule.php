<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a page visitors remarketing rule.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/pagevisitorsrule?view=bingads-13 PageVisitorsRule Data Object
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
