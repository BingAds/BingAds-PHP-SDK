<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list, or negative sites of a website exclusion list.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getlistitemsbysharedlist?view=bingads-13 GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        /**
         * The list of negative keywords or negative sites.
         * @var SharedListItem[]
         */
        public $ListItems;
    }
}
