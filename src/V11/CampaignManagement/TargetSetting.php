<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * The target settings that determines whether the Age, CompanyName, Gender, Industry, and JobFunction criterion type groups use the "target and bid" option or the "bid only" target option.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/targetsetting?view=bingads-11 TargetSetting Data Object
     * 
     * @uses TargetSettingDetail
     */
    final class TargetSetting extends Setting
    {
        /**
         * Determines whether the Age, CompanyName, Gender, Industry, and JobFunction criterion type groups use the "target and bid" option or the "bid only" target option.
         * @var TargetSettingDetail[]
         */
        public $Details;
    }

}
