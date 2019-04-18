<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/customeraccountshare?view=bingads-13 CustomerAccountShare Data Object
     * 
     * @uses CustomerAccountShareAssociation
     * @used-by CustomerShare
     */
    final class CustomerAccountShare
    {
        /**
         * Reserved.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved.
         * @var CustomerAccountShareAssociation[]
         */
        public $Associations;

        /**
         * Reserved.
         * @var integer
         */
        public $CustomerId;
    }

}
