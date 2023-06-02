<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets reasons for ad extension editorial issues.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getadextensionseditorialreasons?view=bingads-13 GetAdExtensionsEditorialReasons Response Object
     * 
     * @uses AdExtensionEditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsResponse
    {
        /**
         * The collection of ad extension editorial reasons.
         * @var AdExtensionEditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
