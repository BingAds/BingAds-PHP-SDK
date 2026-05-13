<?php

namespace Microsoft\BingAds\V13\CustomerBilling;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/customer-billing-service/ungroupedaccount?view=bingads-13 UngroupedAccount Data Object
     * 
     * @uses KeyValueEntityOflongstring
     * @used-by GetUngroupedAccountsResponse
     */
    final class UngroupedAccount
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var string
         */
        public $AccountNumber;

        /**
         * Reserved.
         * @var string
         */
        public $AccountName;

        /**
         * Reserved.
         * @var KeyValueEntityOflongstring[]
         */
        public $PotentialBillingGroups;
    }

}
