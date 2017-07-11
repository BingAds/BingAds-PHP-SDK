<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines the possible status values of an account.
     * @link http://msdn.microsoft.com/en-us/library/ff728394(v=msads.110).aspx AccountLifeCycleStatus Value Set
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
