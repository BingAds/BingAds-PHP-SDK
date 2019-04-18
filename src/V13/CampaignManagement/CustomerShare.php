<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/customershare?view=bingads-13 CustomerShare Data Object
     * 
     * @uses CustomerAccountShare
     * @used-by Audience
     * @used-by UetTag
     */
    final class CustomerShare
    {
        /**
         * Reserved.
         * @var CustomerAccountShare[]
         */
        public $CustomerAccountShares;

        /**
         * Reserved.
         * @var integer
         */
        public $OwnerCustomerId;
    }

}
