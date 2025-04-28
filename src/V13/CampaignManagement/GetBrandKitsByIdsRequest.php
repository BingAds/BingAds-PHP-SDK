<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getbrandkitsbyids?view=bingads-13 GetBrandKitsByIds Request Object
     * 
     * @uses BrandKitAdditionalField
     * @used-by BingAdsCampaignManagementService::GetBrandKitsByIds
     */
    final class GetBrandKitsByIdsRequest
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var integer[]
         */
        public $BrandKitIds;

        /**
         * Reserved.
         * @var BrandKitAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
