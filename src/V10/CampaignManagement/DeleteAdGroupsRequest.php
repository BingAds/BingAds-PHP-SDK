<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsRequest
    {
        /**
         * The campaign that contains the ad groups that will be deleted.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 ad group identifiers to delete.
         * @var integer[]
         */
        public $AdGroupIds;
    }
}
