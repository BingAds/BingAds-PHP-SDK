<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Make updates to the specified data exclusions.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatedataexclusions?view=bingads-13 UpdateDataExclusions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateDataExclusions
     */
    final class UpdateDataExclusionsResponse
    {
        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
