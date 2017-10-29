<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more campaigns in a specified account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletecampaigns?version=11 DeleteCampaigns Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaigns to delete.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 campaign identifiers to delete.
         * @var integer[]
         */
        public $CampaignIds;
    }
}
