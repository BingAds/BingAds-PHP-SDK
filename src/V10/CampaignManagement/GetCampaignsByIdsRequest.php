<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Request Object
     * 
     * @uses CampaignType
     * @uses CampaignAdditionalField
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
         * The type of campaign to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The list of additional elements that you want included within each returned Campaign object.
         * @var CampaignAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
