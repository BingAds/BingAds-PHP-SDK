<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Searches for user invitations that match a specified criteria.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/searchuserinvitations?view=bingads-13 SearchUserInvitations Request Object
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
