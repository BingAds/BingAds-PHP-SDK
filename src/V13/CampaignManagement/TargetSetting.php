<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The target settings that determines whether the Age, Audience, CompanyName, Gender, Industry, and JobFunction criterion type groups use the "target and bid" option or the "bid only" target option.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/targetsetting?view=bingads-13 TargetSetting Data Object
     * 
     * @uses TargetSettingDetail
     */
    final class TargetSetting extends Setting
    {
        /**
         * Determines whether the Age, Audience, CompanyName, Gender, Industry, and JobFunction criterion type groups use the "target and bid" option or the "bid only" target option.
         * @var TargetSettingDetail[]
         */
        public $Details;
    }

}
