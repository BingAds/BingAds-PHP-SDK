<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Deletes negative keywords from a negative keyword list, or negative sites from a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/deletelistitemsfromsharedlist?view=bingads-13 DeleteListItemsFromSharedList Request Object
     * 
     * @uses SharedList
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListRequest
    {
        /**
         * The list of identifiers of negative keywords to delete from the negative keyword list, or the negative sites to delete from the website exclusion list.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * The negative keyword list or website exclusion list.
         * @var SharedList
         */
        public $SharedList;

        /**
         * Indicates whether the shared entity is available at the ad account (Account) or manager account (Customer) level.
         * @var EntityScope
         */
        public $SharedEntityScope;
    }
}
