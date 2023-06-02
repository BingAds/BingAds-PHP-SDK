<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds negative keywords to a negative keyword list, or negative sites to a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlistitemstosharedlist?view=bingads-13 AddListItemsToSharedList Response Object
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
