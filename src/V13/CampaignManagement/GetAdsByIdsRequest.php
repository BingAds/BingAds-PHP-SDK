<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the specified ads from the specified ad group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadsbyids?view=bingads-13 GetAdsByIds Request Object
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
         * The additional field values enable you to get the latest features using the current version of Campaign Management API, and in the next version the corresponding elements will be included by default.
         * @var AdAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
