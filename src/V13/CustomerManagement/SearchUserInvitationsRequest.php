<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for user invitations that match the request criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchuserinvitations?view=bingads-13 SearchUserInvitations Request Object
     * 
     * @uses Predicate
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsRequest
    {
        /**
         * Determines the conditions that all must be met to return user invitations.
         * @var Predicate[]
         */
        public $Predicates;
    }
}
