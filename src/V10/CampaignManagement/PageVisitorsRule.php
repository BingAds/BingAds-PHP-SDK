<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a page visitors remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772358(v=msads.100).aspx PageVisitorsRule Data Object
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
