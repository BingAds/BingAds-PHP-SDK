<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignsbyaccountid?view=bingads-13 GetCampaignsByAccountId Response Object
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
