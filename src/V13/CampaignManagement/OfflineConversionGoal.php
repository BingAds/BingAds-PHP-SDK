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
         * This determines if your offline conversion goal uses your own attribution model and allows you to import fractional credit for each MSCLKID.
         * @var boolean
         */
        public $IsExternallyAttributed;
    }

}
