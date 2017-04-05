<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a remarketing list that can be associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt735047(v=msads.100).aspx RemarketingList Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses RemarketingRule
     * @uses EntityScope
     * @used-by AddRemarketingListsRequest
     * @used-by GetRemarketingListsResponse
     * @used-by UpdateRemarketingListsRequest
     */
    final class RemarketingList
    {
        public $Description;
        public $ForwardCompatibilityMap;
        public $Id;
        public $MembershipDuration;
        public $Name;
        public $ParentId;
        public $Rule;
        public $Scope;
        public $TagId;
    }

}
