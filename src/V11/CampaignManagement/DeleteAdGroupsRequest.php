<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more ad groups from the specified campaign.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteadgroups?view=bingads-11 DeleteAdGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsRequest
    {
        /**
         * The campaign that contains the ad groups to delete.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 identifiers of the ad groups to delete.
         * @var integer[]
         */
        public $AdGroupIds;
    }
}
