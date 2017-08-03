<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines an app install conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759547(v=msads.110).aspx AppInstallGoal Data Object
     */
    final class AppInstallGoal extends ConversionGoal
    {
        public $AppPlatform;
        public $AppStoreId;
    }

}
