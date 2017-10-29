<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/updatekeywords?version=11 UpdateKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
