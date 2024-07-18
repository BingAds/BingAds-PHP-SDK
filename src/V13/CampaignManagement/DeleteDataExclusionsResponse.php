<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes the specified data exclusions from the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletedataexclusions?view=bingads-13 DeleteDataExclusions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteDataExclusions
     */
    final class DeleteDataExclusionsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
