<?php

namespace Microsoft\BingAds\V12\CampaignManagement;

{
    /**
     * Defines a campaign level product scope with list of conditions that help determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/productscope?view=bingads-12 ProductScope Data Object
     * 
     * @uses ProductCondition
     */
    final class ProductScope extends Criterion
    {
        /**
         * A list of up to product conditions that helps determine whether a product from the Bing Merchant Center store gets served as an ad.
         * @var ProductCondition[]
         */
        public $Conditions;
    }

}
