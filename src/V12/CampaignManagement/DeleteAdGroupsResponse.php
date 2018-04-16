<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes one or more ad groups from the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteadgroups?view=bingads-12 DeleteAdGroups Response Object
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
