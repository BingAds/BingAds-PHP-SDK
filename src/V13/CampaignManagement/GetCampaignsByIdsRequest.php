<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getcampaignsbyids?view=bingads-13 GetCampaignsByIds Request Object
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
         * The type of campaigns to get, for example Search, Shopping, or DynamicSearchAds.
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
