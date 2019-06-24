<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more labels from the account.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletelabels?view=bingads-13 DeleteLabels Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteLabels
     */
    final class DeleteLabelsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
