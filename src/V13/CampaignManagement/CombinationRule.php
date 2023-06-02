<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * A combination rule includes logical conditions used to determine who to add to your combined list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/combinationrule?view=bingads-13 CombinationRule Data Object
     * 
     * @uses LogicalOperator
     * @used-by CombinedList
     */
    final class CombinationRule
    {
        /**
         * The list of audience identifiers to combine in a logical set.
         * @var integer[]
         */
        public $AudienceIds;

        /**
         * Determines whether to include or exclude any or all of the AudienceIds.
         * @var LogicalOperator
         */
        public $Operator;
    }

}
