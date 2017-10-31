<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadsbyeditorialstatus?view=bingads-11 GetAdsByEditorialStatus Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusResponse
    {
        /**
         * The list of ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }
}
