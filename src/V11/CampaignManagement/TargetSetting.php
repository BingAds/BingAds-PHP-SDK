<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Reserved.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/targetsetting?view=bingads-11 TargetSetting Data Object
     * 
     * @uses TargetSettingDetail
     */
    final class TargetSetting extends Setting
    {
        /**
         * Reserved.
         * @var TargetSettingDetail[]
         */
        public $Details;
    }

}
