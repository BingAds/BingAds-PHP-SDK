<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines whether the ad group will target Hotel Price Ads (HPA) or Property Price Ads (PPA).
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/hotelsetting?view=bingads-13 HotelSetting Data Object
     * 
     * @uses HotelAdGroupType
     */
    final class HotelSetting extends Setting
    {
        /**
         * The type of ad.
         * @var HotelAdGroupType
         */
        public $HotelAdGroupType;
    }

}
