<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadsbyeditorialstatus?view=bingads-13 GetAdsByEditorialStatus Request Object
     * 
     * @uses AdEditorialStatus
     * @uses AdType
     * @uses AdAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The editorial review status that the ads must have to be returned.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

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
