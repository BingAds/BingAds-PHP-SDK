<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a shareable audience or UET tag that a customer owns.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/customershare?view=bingads-13 CustomerShare Data Object
     * 
     * @uses CustomerAccountShare
     * @used-by Audience
     * @used-by UetTag
     */
    final class CustomerShare
    {
        /**
         * Determines the list of customers and accounts that share the audience or UET tag.
         * @var CustomerAccountShare[]
         */
        public $CustomerAccountShares;

        /**
         * The customer who owns the share.
         * @var integer
         */
        public $OwnerCustomerId;
    }

}
