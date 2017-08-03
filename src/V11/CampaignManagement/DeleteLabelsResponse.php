<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more labels from the account.
     * @link http://msdn.microsoft.com/en-us/library/mt803282(v=msads.110).aspx DeleteLabels Response Object
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
