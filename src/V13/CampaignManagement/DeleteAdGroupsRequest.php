<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes one or more ad groups from the specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadgroups?view=bingads-13 DeleteAdGroups Request Object
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
