<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Updates the labels within the account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatelabels?view=bingads-12 UpdateLabels Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateLabels
     */
    final class UpdateLabelsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
