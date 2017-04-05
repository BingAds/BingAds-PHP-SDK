<?php
// Generated on 12/5/2016 5:47:05 AM

namespace Microsoft\BingAds\V9\CustomerManagement;

{
    /**
     * Gets the details of an account.
     * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccount Request Object
     * 
     * @used-by BingAdsCustomerManagementService::GetAccount
     */
    final class GetAccountRequest
    {
        /**
         * The identifier of the account to get.
         * @var integer
         */
        public $AccountId;

        /**
         * Determines whether or not the returned AdvertiserAccount should include the TaxId, TaxIdStatus, and BusinessAddress elements.
         * @var boolean
         */
        public $IncludeTaxDetails;
    }
}
