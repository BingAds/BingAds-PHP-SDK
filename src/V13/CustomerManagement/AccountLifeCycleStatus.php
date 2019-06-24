<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the possible status values of an account.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/accountlifecyclestatus?view=bingads-13 AccountLifeCycleStatus Value Set
     * 
     * @used-by AccountInfo
     * @used-by AccountInfoWithCustomerData
     * @used-by AdvertiserAccount
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

        /** Your account has been suspended because of suspicious activity, and no ads are eligible for delivery. */
        const Suspended = 'Suspended';
    }

}
