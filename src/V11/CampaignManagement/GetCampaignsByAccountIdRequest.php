<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaignsbyaccountid?view=bingads-11 GetCampaignsByAccountId Request Object
     * 
     * @uses CampaignType
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
         * The type of campaign to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The Bing Shopping campaigns with SubType set to ShoppingCoOperative are not returned at all unless you set ReturnCoOpCampaigns true.
         * @var boolean
         */
        public $ReturnCoOpCampaigns;
    }
}
