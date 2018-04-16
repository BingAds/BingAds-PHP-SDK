<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/applyproductpartitionactions?view=bingads-12 ApplyProductPartitionActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsResponse
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
