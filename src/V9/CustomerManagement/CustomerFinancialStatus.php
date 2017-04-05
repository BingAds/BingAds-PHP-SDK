<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Defines the possible financial status values of a customer.
     * @link http://msdn.microsoft.com/en-us/library/ff728435(v=msads.90).aspx CustomerFinancialStatus Value Set
     * 
     * @used-by Customer
     */
    final class CustomerFinancialStatus
    {
        /** Not used. */
        const ProposalsOnly = 'ProposalsOnly';

        /** The customer is undergoing a credit check as part of the customer sign-up process. */
        const PendingCreditCheck = 'PendingCreditCheck';

        /** The customer is in good standing. */
        const ClearFinancialStatus = 'ClearFinancialStatus';

        /** The customer is considered to be a credit risk. */
        const SoldToOnly = 'SoldToOnly';

        /** One of the customer's accounts is past due. */
        const CreditHold = 'CreditHold';

        /** Not used. */
        const CreditWarning = 'CreditWarning';
    }

}
