<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/getadextensionidsbyaccountid?view=bingads-12 GetAdExtensionIdsByAccountId Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdResponse
    {
        /**
         * A list of ad extension IDs.
         * @var integer[]
         */
        public $AdExtensionIds;
    }
}
