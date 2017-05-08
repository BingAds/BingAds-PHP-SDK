<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.110).aspx GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdResponse
    {
        /**
         * The list of campaigns that were retrieved.
         * @var Campaign[]
         */
        public $Campaigns;
    }
}
