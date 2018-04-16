<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/applyproductpartitionactions?view=bingads-12 ApplyProductPartitionActions Request Object
     * 
     * @uses AdGroupCriterionAction
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsRequest
    {
        /**
         * A list of up to 5,000 AdGroupCriterionAction objects that each contain an Action element and either a BiddableAdGroupCriterion or NegativeAdGroupCriterion.
         * @var AdGroupCriterionAction[]
         */
        public $CriterionActions;
    }
}
