<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/setadextensionsassociations?view=bingads-13 SetAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
