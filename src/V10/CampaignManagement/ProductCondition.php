<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines a condition that determines whether a product is selected from a customer's Bing Merchant Center catalog file.
     * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.100).aspx ProductCondition Data Object
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
