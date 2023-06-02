<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an ad group level product partition with one condition that helps determine whether a product from the Microsoft Merchant Center store gets served as a product ad.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/productpartition?view=bingads-13 ProductPartition Data Object
     * 
     * @uses ProductCondition
     * @uses ProductPartitionType
     */
    final class ProductPartition extends Criterion
    {
        /**
         * A condition that helps determine whether a product from the Microsoft Merchant Center store gets served as an ad.
         * @var ProductCondition
         */
        public $Condition;

        /**
         * The identifier of the parent BiddableAdGroupCriterion or NegativeAdGroupCriterion.
         * @var integer
         */
        public $ParentCriterionId;

        /**
         * The type of product partition, for example Subdivision or Unit.
         * @var ProductPartitionType
         */
        public $PartitionType;
    }

}
