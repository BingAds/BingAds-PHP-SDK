<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a HotelGroup.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/applyhotelgroupactions?view=bingads-13 ApplyHotelGroupActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyHotelGroupActions
     */
    final class ApplyHotelGroupActionsResponse
    {
        /**
         * A list of identifiers that identify the criterion that had the action applied.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
