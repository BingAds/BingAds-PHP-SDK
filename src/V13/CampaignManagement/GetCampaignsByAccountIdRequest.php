<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignsbyaccountid?view=bingads-13 GetCampaignsByAccountId Request Object
     * 
     * @uses CampaignType
     * @uses CampaignAdditionalField
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdRequest
    {
        /**
         * The identifier of the account that contains the campaigns to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The type of campaign to get, for example Search, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The list of additional properties that you want included within each returned campaign.
         * @var CampaignAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
