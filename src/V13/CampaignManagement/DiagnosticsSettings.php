<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DiagnosticsSettings data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticssettings?view=bingads-13 DiagnosticsSettings Data Object
     * 
     * @used-by GetDiagnosticsRequest
     */
    final class DiagnosticsSettings
    {
        /**
         * The cache is enabled if True.
         * @var boolean
         */
        public $EnableCache;

        /**
         * The pilot is enabled if True.
         * @var boolean
         */
        public $EnablePilot;

        /**
         * The last-checked time in UTC.
         * @var string
         */
        public $LastCheckTimeUTC;
    }

}
