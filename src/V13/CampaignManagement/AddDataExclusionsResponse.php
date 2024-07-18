<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Add a data exclusion to the specified account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/adddataexclusions?view=bingads-13 AddDataExclusions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddDataExclusions
     */
    final class AddDataExclusionsResponse
    {
        /**
         * The data exclusion IDs.
         * @var integer[]
         */
        public $DataExclusionIds;

        /**
         * An array BatchError that contains details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
