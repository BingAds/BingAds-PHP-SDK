<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for user invitations that match a specified criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn771300(v=msads.110).aspx SearchUserInvitations Response Object
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
