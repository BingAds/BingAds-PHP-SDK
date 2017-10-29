<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupcriterionaction?version=11 AdGroupCriterionAction Data Object
     * 
     * @uses ItemAction
     * @uses AdGroupCriterion
     * @used-by ApplyProductPartitionActionsRequest
     */
    final class AdGroupCriterionAction
    {
        /**
         * The action to be applied for the AdGroupCriterion.
         * @var ItemAction
         */
        public $Action;

        /**
         * The BiddableAdGroupCriterion or NegativeAdGroupCriterion, either of which must contain a ProductPartition criterion.
         * @var AdGroupCriterion
         */
        public $AdGroupCriterion;
    }

}
