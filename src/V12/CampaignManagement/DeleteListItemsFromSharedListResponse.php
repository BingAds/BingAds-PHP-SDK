<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Deletes negative keywords from a negative keyword list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deletelistitemsfromsharedlist?view=bingads-12 DeleteListItemsFromSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
