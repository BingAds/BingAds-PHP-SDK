<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Gets a list of the accounts and customers that match the specified filter criteria.
     * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.110).aspx FindAccountsOrCustomersInfo Response Object
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
