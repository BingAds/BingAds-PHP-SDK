<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getadextensionidsbyaccountid?version=11 GetAdExtensionIdsByAccountId Response Object
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
