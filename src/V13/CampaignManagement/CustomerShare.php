<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved for future use.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/customershare?view=bingads-13 CustomerShare Data Object
     * 
     * @uses CustomerAccountShare
     * @used-by Audience
     * @used-by UetTag
     */
    final class CustomerShare
    {
        /**
         * Reserved for future use.
         * @var CustomerAccountShare[]
         */
        public $CustomerAccountShares;

        /**
         * Reserved for future use.
         * @var integer
         */
        public $OwnerCustomerId;
    }

}
