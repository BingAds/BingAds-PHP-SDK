<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads within an ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyadgroupid?view=bingads-11 GetAdsByAdGroupId Request Object
     * 
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * One or more ad types to retrieve.
         * @var AdType[]
         */
        public $AdTypes;
    }
}
