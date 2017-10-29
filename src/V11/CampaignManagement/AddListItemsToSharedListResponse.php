<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds negative keywords to the shared negative keyword list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addlistitemstosharedlist?version=11 AddListItemsToSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListResponse
    {
        /**
         * A list of long values that represents the identifiers for the list items that were added.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
