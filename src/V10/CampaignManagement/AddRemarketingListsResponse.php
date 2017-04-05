<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds one or more remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt790574(v=msads.100).aspx AddRemarketingLists Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddRemarketingLists
     */
    final class AddRemarketingListsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the remarketing lists that were added.
         * @var integer[]
         */
        public $RemarketingListIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
