<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getlistitemsbysharedlist?version=11 GetListItemsBySharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListRequest
    {
        /**
         * The negative keyword list within the account's shared library, from which to get the negative keywords.
         * @var SharedList
         */
        public $SharedList;
    }
}
