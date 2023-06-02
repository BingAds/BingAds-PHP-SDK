<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds a negative keyword list to the ad account library, or adds a website exclusion list to the manager account (customer) library.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addsharedentity?view=bingads-13 AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityResponse
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

        /**
         * The identifier for the shared entity that was added.
         * @var integer
         */
        public $SharedEntityId;
    }
}
