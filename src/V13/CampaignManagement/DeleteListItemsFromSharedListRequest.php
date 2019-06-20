<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keywords from a negative keyword list.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/deletelistitemsfromsharedlist?view=bingads-13 DeleteListItemsFromSharedList Request Object
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
