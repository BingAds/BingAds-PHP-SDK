<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Removes the association between a negative keyword list and an entity such as a campaign.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletesharedentityassociations?view=bingads-13 DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
