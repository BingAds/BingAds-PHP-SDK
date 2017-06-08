<?php
// Generated on 6/7/2017 5:54:09 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt790574(v=msads.100).aspx AddRemarketingLists Request Object
     * 
     * @uses RemarketingList
     * @used-by BingAdsCampaignManagementService::AddRemarketingLists
     */
    final class AddRemarketingListsRequest
    {
        /**
         * An array of remarketing lists to add.
         * @var RemarketingList[]
         */
        public $RemarketingLists;
    }
}
