<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Gets the remarketing lists that can be associated with entities in the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt735049(v=msads.100).aspx GetRemarketingLists Request Object
     * 
     * @uses RemarketingListAdditionalField
     * @used-by BingAdsCampaignManagementService::GetRemarketingLists
     */
    final class GetRemarketingListsRequest
    {
        public $RemarketingListIds;
        public $ReturnAdditionalFields;
    }
}
