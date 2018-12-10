<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaignsbyaccountid?view=bingads-12 GetCampaignsByAccountId Request Object
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
         * The list of additional properties that you want included within each returned Campaign object.
         * @var CampaignAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
