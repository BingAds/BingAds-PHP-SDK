<?php
// Generated on 5/7/2017 5:48:20 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes negative keywords from a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.110).aspx DeleteListItemsFromSharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListRequest
    {
        /**
         * The list of identifiers of negative keywords to delete from the negative keyword list.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * The negative keyword list within the account's shared library, from which to delete the specified negative keywords.
         * @var SharedList
         */
        public $SharedList;
    }
}
