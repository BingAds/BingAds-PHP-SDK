<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the labels within the account.
     * @link http://msdn.microsoft.com/en-us/library/mt803294(v=msads.110).aspx UpdateLabels Response Object
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
