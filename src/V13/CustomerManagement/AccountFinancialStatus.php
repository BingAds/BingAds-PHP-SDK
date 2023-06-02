<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines the possible financial status values of an account.
     * @link https:/learn.microsoft.com/advertising/customer-management-service/accountfinancialstatus?view=bingads-13 AccountFinancialStatus Value Set
     * 
     * @used-by AdvertiserAccount
     */
    final class AccountFinancialStatus
    {
        /** For an advertiser account, this status indicates that the customer can add campaigns to the account; however, the service will not deliver the account's ads. */
        const Proposed = 'Proposed';

        /** Not used. */
        const PendingCreditCheck = 'PendingCreditCheck';

        /** The account is in good standing. */
        const ClearFinancialStatus = 'ClearFinancialStatus';

        /** Not used. */
        const SoldToOnly = 'SoldToOnly';

        /** Not used. */
        const CreditWarning = 'CreditWarning';

        /** For an advertiser account, this status indicates that the account is past due. */
        const Hold = 'Hold';

        /** The account is past due; however, collection is no longer being pursued. */
        const WriteOff = 'WriteOff';

        /** For a publisher account, this status indicates that the publisher has yet to provide a valid tax instrument. */
        const TaxOnHold = 'TaxOnHold';

        /** For a publisher account, this status indicates that the payout to the publisher was placed on hold by publisher. */
        const UserHold = 'UserHold';
    }

}
