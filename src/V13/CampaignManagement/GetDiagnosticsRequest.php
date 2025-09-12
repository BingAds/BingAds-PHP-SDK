<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
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
         * Reserved.
         * @var DiagnosticsEntity[]
         */
        public $Entities;

        /**
         * Reserved.
         * @var DiagnosticsFilter[]
         */
        public $Checks;

        /**
         * Reserved.
         * @var DiagnosticsSettings
         */
        public $Settings;

        /**
         * Reserved.
         * @var string
         */
        public $CallerName;
    }
}
