<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved for future use.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/customeraccountshare?view=bingads-13 CustomerAccountShare Data Object
     * 
     * @uses CustomerAccountShareAssociation
     * @used-by CustomerShare
     */
    final class CustomerAccountShare
    {
        /**
         * Reserved for future use.
         * @var integer
         */
        public $AccountId;

        /**
         * Reserved for future use.
         * @var CustomerAccountShareAssociation[]
         */
        public $Associations;

        /**
         * Reserved for future use.
         * @var integer
         */
        public $CustomerId;
    }

}
