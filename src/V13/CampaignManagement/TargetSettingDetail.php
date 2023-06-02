<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Determines whether you want to use the "target and bid" option or the "bid only" target option for the criterion type group.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/targetsettingdetail?view=bingads-13 TargetSettingDetail Data Object
     * 
     * @uses CriterionTypeGroup
     * @used-by TargetSetting
     */
    final class TargetSettingDetail
    {
        /**
         * The criterion type group that you want to set either the "target and bid" option or the "bid only" target option.
         * @var CriterionTypeGroup
         */
        public $CriterionTypeGroup;

        /**
         * Determines whether you want to use the "target and bid" option or the "bid only" target option for the criterion type group.
         * @var boolean
         */
        public $TargetAndBid;
    }

}
