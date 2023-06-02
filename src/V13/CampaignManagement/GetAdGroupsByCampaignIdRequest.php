<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the ad groups within the specified campaign.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadgroupsbycampaignid?view=bingads-13 GetAdGroupsByCampaignId Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The list of additional properties that you want included within each returned ad group.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
