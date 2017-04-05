<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdResponse
    {
        /**
         * An array of Campaign objects that represents the campaigns that were retrieved.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
