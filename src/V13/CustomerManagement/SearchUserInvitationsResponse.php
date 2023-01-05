<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for user invitations that match the request criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchuserinvitations?view=bingads-13 SearchUserInvitations Response Object
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
