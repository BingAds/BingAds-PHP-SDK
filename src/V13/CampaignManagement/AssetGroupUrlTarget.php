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
         * Reserved.
         * @var integer
         */
        public $Id;

        /**
         * Reserved.
         * @var GenericEntityStatus
         */
        public $Status;

        /**
         * Reserved.
         * @var string
         */
        public $TargetCondition1;

        /**
         * Reserved.
         * @var string
         */
        public $TargetCondition2;

        /**
         * Reserved.
         * @var string
         */
        public $TargetCondition3;

        /**
         * Reserved.
         * @var string
         */
        public $TargetConditionOperator1;

        /**
         * Reserved.
         * @var string
         */
        public $TargetConditionOperator2;

        /**
         * Reserved.
         * @var string
         */
        public $TargetConditionOperator3;

        /**
         * Reserved.
         * @var string
         */
        public $TargetValue1;

        /**
         * Reserved.
         * @var string
         */
        public $TargetValue2;

        /**
         * Reserved.
         * @var string
         */
        public $TargetValue3;
    }

}
