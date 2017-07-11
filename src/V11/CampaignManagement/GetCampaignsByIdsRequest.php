<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.110).aspx GetCampaignsByIds Request Object
     * 
     * @uses CampaignType
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 identifiers of the campaigns to get from the specified account.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * The type of campaigns to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;
    }
}
