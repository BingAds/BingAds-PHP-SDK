<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adgroupcriterionaction?view=bingads-13 AdGroupCriterionAction Data Object
     * 
     * @uses ItemAction
     * @uses AdGroupCriterion
     * @used-by ApplyHotelGroupActionsRequest
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
