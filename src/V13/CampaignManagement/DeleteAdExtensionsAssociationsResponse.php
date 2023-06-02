<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deleteadextensionsassociations?view=bingads-13 DeleteAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
