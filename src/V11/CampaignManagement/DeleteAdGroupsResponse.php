<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more ad groups from the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.110).aspx DeleteAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
