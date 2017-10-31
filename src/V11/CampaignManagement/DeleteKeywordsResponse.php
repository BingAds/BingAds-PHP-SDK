<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more keywords in a specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletekeywords?view=bingads-11 DeleteKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
