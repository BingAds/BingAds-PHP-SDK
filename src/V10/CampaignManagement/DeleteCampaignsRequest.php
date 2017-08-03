<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Request Object
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
