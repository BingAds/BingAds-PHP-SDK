<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the third party measurement setting data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/thirdpartymeasurementsetting?view=bingads-13 ThirdPartyMeasurementSetting Data Object
     * 
     * @uses KeyValuePairOfstringstring
     */
    final class ThirdPartyMeasurementSetting extends Setting
    {
        /**
         * Reserved.
         * @var KeyValuePairOfstringstring[][]
         */
        public $Details;
    }

}
