<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the remarketing lists that can be associated with entities in the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt735049(v=msads.100).aspx GetRemarketingLists Response Object
     * 
     * @uses RemarketingList
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetRemarketingLists
     */
    final class GetRemarketingListsResponse
    {
        /**
         * An array of RemarketingList objects that corresponds directly to the remarketing list identifiers that you specified in the request.
         * @var RemarketingList[]
         */
        public $RemarketingLists;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
