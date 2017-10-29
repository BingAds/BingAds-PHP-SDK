<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new ad groups to a specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addadgroups?version=11 AddAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ad groups that were added.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
