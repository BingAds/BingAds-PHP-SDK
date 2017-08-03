<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.110).aspx DeleteKeywords Response Object
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
