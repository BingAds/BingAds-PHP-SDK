<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Response Object
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
