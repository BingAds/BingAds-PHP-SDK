<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Updates the specified remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt790576(v=msads.100).aspx UpdateRemarketingLists Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateRemarketingLists
     */
    final class UpdateRemarketingListsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
