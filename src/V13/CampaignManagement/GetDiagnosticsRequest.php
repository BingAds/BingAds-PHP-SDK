<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the get diagnostics service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdiagnostics?view=bingads-13 GetDiagnostics Request Object
     * 
     * @uses DiagnosticsEntity
     * @uses DiagnosticsFilter
     * @uses DiagnosticsSettings
     * @used-by BingAdsCampaignManagementService::GetDiagnostics
     */
    final class GetDiagnosticsRequest
    {
        /**
         * The entities to diagnose.
         * @var DiagnosticsEntity[]
         */
        public $Entities;

        /**
         * The diagnostic checks to run.
         * @var DiagnosticsFilter[]
         */
        public $Checks;

        /**
         * The settings to use when running the diagnostics.
         * @var DiagnosticsSettings
         */
        public $Settings;

        /**
         * The name of the caller requesting the diagnostics.
         * @var string
         */
        public $CallerName;
    }
}
