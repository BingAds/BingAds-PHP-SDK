<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Updates the labels within the account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/updatelabels?view=bingads-13 UpdateLabels Response Object
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
