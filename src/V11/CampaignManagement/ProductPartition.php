<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an ad group level product partition with one condition that helps determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link http://msdn.microsoft.com/en-us/library/dn913123(v=msads.110).aspx ProductPartition Data Object
     * 
     * @uses ProductCondition
     * @uses ProductPartitionType
     */
    final class ProductPartition extends Criterion
    {
        public $Condition;
        public $ParentCriterionId;
        public $PartitionType;
    }

}
