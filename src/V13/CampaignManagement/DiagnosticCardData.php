<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticcarddata?view=bingads-13 DiagnosticCardData Data Object
     * 
     * @uses HealthCheckData
     * @uses HealthCheckMetadata
     * @used-by GetDiagnosticsResponse
     */
    final class DiagnosticCardData
    {
        /**
         * Reserved.
         * @var HealthCheckData[]
         */
        public $CheckpointsData;

        /**
         * Reserved.
         * @var HealthCheckMetadata
         */
        public $Metadata;
    }

}
