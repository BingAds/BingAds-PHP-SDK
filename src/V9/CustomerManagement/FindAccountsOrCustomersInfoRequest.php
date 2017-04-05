<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfo Request Object
     * 
     * @uses ApplicationType
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoRequest
    {
        /**
         * The criteria to use to filter the list of accounts and customers.
         * @var string
         */
        public $Filter;

        /**
         * A nonzero positive integer that specifies the number of accounts to return in the result.
         * @var integer
         */
        public $TopN;

        /**
         * A value that determines whether to return advertiser accounts or publisher accounts.
         * @var ApplicationType
         */
        public $ApplicationScope;
    }
}
