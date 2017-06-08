<?php
// Generated on 6/7/2017 5:53:03 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfo Response Object
     * 
     * @uses AccountInfoWithCustomerData
     * @used-by BingAdsCustomerManagementService::FindAccountsOrCustomersInfo
     */
    final class FindAccountsOrCustomersInfoResponse
    {
        /**
         * A list of AccountInfoWithCustomerData objects of the accounts and customers that match the specified filter criteria.
         * @var AccountInfoWithCustomerData[]
         */
        public $AccountInfoWithCustomerData;
    }
}
