<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyeditorialstatus?view=bingads-12 GetAdsByEditorialStatus Request Object
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
         * The list of additional properties that you want included within each returned Ad object.
         * @var AdAdditionalField
         */
        public $ReturnAdditionalFields;
    }
}
