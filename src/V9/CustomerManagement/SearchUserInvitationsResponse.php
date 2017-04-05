<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Searches for user invitations that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn771300(v=msads.90).aspx SearchUserInvitations Response Object
     * 
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsResponse
    {
        /**
         * A list of user invitations that meet the specified criteria.
         * @var UserInvitation[]
         */
        public $UserInvitations;
    }
}
