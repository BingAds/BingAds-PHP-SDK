<?php
// Generated on 6/7/2017 5:54:10 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the list items such as the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        /**
         * An array of list items returned from the shared list, for example a list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;
    }
}
