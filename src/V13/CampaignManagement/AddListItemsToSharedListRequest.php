<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Adds negative keywords to a negative keyword list, or negative sites to a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/addlistitemstosharedlist?view=bingads-13 AddListItemsToSharedList Request Object
     * 
     * @uses SharedListItem
     * @uses SharedList
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListRequest
    {
        /**
         * The negative keywords to add to the negative keyword list, or the negative sites to add to the website exclusion list.
         * @var SharedListItem[]
         */
        public $ListItems;

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
