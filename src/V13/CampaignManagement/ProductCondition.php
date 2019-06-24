<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines a condition that determines whether a product is selected from a customer's Microsoft Merchant Center catalog file.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/productcondition?view=bingads-13 ProductCondition Data Object
     * 
     * @used-by ProductPartition
     * @used-by ProductScope
     */
    final class ProductCondition
    {
        /**
         * The condition's attribute value.
         * @var string
         */
        public $Attribute;

        /**
         * The condition's operand.
         * @var string
         */
        public $Operand;
    }

}
