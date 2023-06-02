<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list, or negative sites of a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlistitemsbysharedlist?view=bingads-13 GetListItemsBySharedList Request Object
     * 
     * @uses SharedList
     * @uses EntityScope
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListRequest
    {
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
