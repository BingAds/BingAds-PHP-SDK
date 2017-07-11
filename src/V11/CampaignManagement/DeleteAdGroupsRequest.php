<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more ad groups from the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.110).aspx DeleteAdGroups Request Object
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
