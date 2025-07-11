<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdiagnostics?view=bingads-13 GetDiagnostics Response Object
     * 
     * @uses DiagnosticTileData
     * @uses DiagnosticCategoryData
     * @uses DiagnosticCardData
     * @uses HealthCheckError
     * @used-by BingAdsCampaignManagementService::GetDiagnostics
     */
    final class GetDiagnosticsResponse
    {
        /**
         * Reserved.
         * @var DiagnosticTileData
         */
        public $DiagnosticTileData;

        /**
         * Reserved.
         * @var DiagnosticCategoryData[]
         */
        public $DiagnosticCategoryData;

        /**
         * Reserved.
         * @var DiagnosticCardData[]
         */
        public $DiagnosticCardData;

        /**
         * Reserved.
         * @var HealthCheckError[]
         */
        public $DiagnosticErrors;
    }
}
