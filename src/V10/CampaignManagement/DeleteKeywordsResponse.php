<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Response Object
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
