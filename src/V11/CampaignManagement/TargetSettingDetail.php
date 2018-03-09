<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/targetsettingdetail?view=bingads-11 TargetSettingDetail Data Object
     * 
     * @uses CriterionTypeGroup
     * @used-by TargetSetting
     */
    final class TargetSettingDetail
    {
        /**
         * Reserved.
         * @var CriterionTypeGroup
         */
        public $CriterionTypeGroup;

        /**
         * Reserved.
         * @var boolean
         */
        public $TargetAll;
    }

}
