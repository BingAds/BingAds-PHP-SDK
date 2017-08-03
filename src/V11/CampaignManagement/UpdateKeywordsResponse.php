<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.110).aspx UpdateKeywords Response Object
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
