<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * The ad group type for hotel campaigns.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/hoteladgrouptype?view=bingads-13 HotelAdGroupType Value Set
     * 
     * @used-by HotelSetting
     */
    final class HotelAdGroupType
    {
        /** The default ad group type for hotel campaigns. */
        const HotelAd = 'HotelAd';

        /** The ad group type for promoted hotel ad groups. */
        const PropertyAd = 'PropertyAd';
    }

}
