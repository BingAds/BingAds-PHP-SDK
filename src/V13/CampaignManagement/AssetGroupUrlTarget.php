<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the asset group URL target data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/assetgroupurltarget?view=bingads-13 AssetGroupUrlTarget Data Object
     * 
     * @uses GenericEntityStatus
     * @used-by AssetGroup
     */
    final class AssetGroupUrlTarget
    {
        /**
         * The Microsoft Advertising identifier of the asset group URL target.
         * @var integer
         */
        public $Id;

        /**
         * The status of the asset group URL target.
         * @var GenericEntityStatus
         */
        public $Status;

        /**
         * The first condition used to select matching URLs.
         * @var string
         */
        public $TargetCondition1;

        /**
         * The second condition used to select matching URLs.
         * @var string
         */
        public $TargetCondition2;

        /**
         * The third condition used to select matching URLs.
         * @var string
         */
        public $TargetCondition3;

        /**
         * The operator to apply to the first target condition.
         * @var string
         */
        public $TargetConditionOperator1;

        /**
         * The operator to apply to the second target condition.
         * @var string
         */
        public $TargetConditionOperator2;

        /**
         * The operator to apply to the third target condition.
         * @var string
         */
        public $TargetConditionOperator3;

        /**
         * The value to compare against the first target condition.
         * @var string
         */
        public $TargetValue1;

        /**
         * The value to compare against the second target condition.
         * @var string
         */
        public $TargetValue2;

        /**
         * The value to compare against the third target condition.
         * @var string
         */
        public $TargetValue3;
    }

}
