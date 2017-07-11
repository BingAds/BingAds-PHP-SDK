<?php
// Generated on 7/10/2017 3:08:23 PM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.110).aspx GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        /**
         * The list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;
    }
}
