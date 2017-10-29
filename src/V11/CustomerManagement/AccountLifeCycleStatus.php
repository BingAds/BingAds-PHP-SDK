<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of an account.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/accountlifecyclestatus?version=11 AccountLifeCycleStatus Value Set
     * 
     * @used-by Account
     * @used-by AccountInfo
     * @used-by AccountInfoWithCustomerData
     */
    final class AccountLifeCycleStatus
    {
        /** The account is in a draft state. */
        const Draft = 'Draft';

        /** The account is active, which means that the account and its campaigns can be managed and its ads served. */
        const Active = 'Active';

        /** The account is inactive, which means that the system deleted the account. */
        const Inactive = 'Inactive';

        /** For internal use only. */
        const Pause = 'Pause';

        /** For internal use only. */
        const Pending = 'Pending';

        /** Your account has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
        const Suspended = 'Suspended';
    }

}
