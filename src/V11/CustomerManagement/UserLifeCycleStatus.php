<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of a user.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/userlifecyclestatus?version=11 UserLifeCycleStatus Value Set
     * 
     * @used-by User
     * @used-by GetUsersInfoRequest
     */
    final class UserLifeCycleStatus
    {
        /** The user is a new user who has not been activated. */
        const Pending = 'Pending';

        /** The user is active. */
        const Active = 'Active';

        /** Reserved for internal use. */
        const Inactive = 'Inactive';

        /** Reserved for internal use. */
        const Deleted = 'Deleted';
    }

}
