<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keywords from a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.110).aspx DeleteListItemsFromSharedList Response Object
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
