<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/applyhotelgroupactions?view=bingads-13 ApplyHotelGroupActions Request Object
     * 
     * @uses AdGroupCriterionAction
     * @used-by BingAdsCampaignManagementService::ApplyHotelGroupActions
     */
    final class ApplyHotelGroupActionsRequest
    {
        /**
         * A list of up to 5,000 AdGroupCriterionAction objects that each contain an Action element and a BiddableAdGroupCriterion.
         * @var AdGroupCriterionAction[]
         */
        public $CriterionActions;
    }
}
