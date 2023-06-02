<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the specified ad groups within the specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadgroupsbyids?view=bingads-13 GetAdGroupsByIds Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 identifiers of the ad groups to get.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * The list of additional properties that you want included within each returned ad group.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
