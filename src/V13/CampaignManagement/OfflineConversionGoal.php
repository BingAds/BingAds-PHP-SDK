<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines an offline conversion goal.
     * @link https://docs.microsoft.com/en-us/advertising/campaign-management-service/offlineconversiongoal?view=bingads-13 OfflineConversionGoal Data Object
     */
    final class OfflineConversionGoal extends ConversionGoal
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $IsExternallyAttributed;
    }

}
