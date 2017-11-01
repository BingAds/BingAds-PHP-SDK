<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Searches for user invitations that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/searchuserinvitations?view=bingads-11 SearchUserInvitations Request Object
     * 
     * @uses Predicate
     * @used-by BingAdsCustomerManagementService::SearchUserInvitations
     */
    final class SearchUserInvitationsRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;
    }
}
