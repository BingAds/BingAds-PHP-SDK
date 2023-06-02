<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a customer or account that can use the shared audience or UET tag.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customeraccountshare?view=bingads-13 CustomerAccountShare Data Object
     * 
     * @uses CustomerAccountShareAssociation
     * @used-by CustomerShare
     */
    final class CustomerAccountShare
    {
        /**
         * The identifier of an advertiser account that can use the shared audience.
         * @var integer
         */
        public $AccountId;

        /**
         * Provides details about whether and how the shared audience or UET tag is being used.
         * @var CustomerAccountShareAssociation[]
         */
        public $Associations;

        /**
         * The identifier of a customer that can use the shared audience or UET tag.
         * @var integer
         */
        public $CustomerId;
    }

}
