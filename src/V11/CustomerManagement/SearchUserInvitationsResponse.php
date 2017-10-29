<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for user invitations that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchuserinvitations?version=11 SearchUserInvitations Response Object
     * 
     * @uses UserInvitation
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsResponse
    {
        /**
         * A  list of user invitations that meet the specified criteria.
         * @var UserInvitation[]
         */
        public $UserInvitations;
    }
}
