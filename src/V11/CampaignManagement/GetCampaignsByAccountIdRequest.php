<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the campaigns within an account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.110).aspx GetCampaignsByAccountId Request Object
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
    }
}
