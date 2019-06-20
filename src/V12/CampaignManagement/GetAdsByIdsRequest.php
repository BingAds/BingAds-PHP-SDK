<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Retrieves the specified ads from the specified ad group.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getadsbyids?view=bingads-12 GetAdsByIds Request Object
     * 
     * @uses AdType
     * @uses AdAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsRequest
    {
        /**
         * The identifier of the ad group that contains the ads to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 20 identifiers of the requested ads.
         * @var integer[]
         */
        public $AdIds;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;

        /**
         * The list of additional properties that you want included within each returned ad.
         * @var AdAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
