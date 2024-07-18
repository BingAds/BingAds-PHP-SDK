<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified data exclusions from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletedataexclusions?view=bingads-13 DeleteDataExclusions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteDataExclusions
     */
    final class DeleteDataExclusionsRequest
    {
        /**
         * The account ID.
         * @var integer
         */
        public $AccountId;

        /**
         * The IDs of the data exclusions to delete.
         * @var integer[]
         */
        public $DataExclusionIds;
    }
}
