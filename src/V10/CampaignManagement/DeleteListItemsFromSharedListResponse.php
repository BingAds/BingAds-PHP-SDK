<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Response Object
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
