<?php
// Generated on 5/7/2017 5:48:21 AM

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.110).aspx GetListItemsBySharedList Request Object
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
