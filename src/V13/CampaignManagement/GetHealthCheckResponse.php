<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves health check entities and types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethealthcheck?view=bingads-13 GetHealthCheck Response Object
     * 
     * @uses HealthCheckMetadata
     * @uses HealthCheckData
     * @uses HealthCheckError
     * @used-by BingAdsCampaignManagementService::GetHealthCheck
     */
    final class GetHealthCheckResponse
    {
        /**
         * The metadata that describes the health check results.
         * @var HealthCheckMetadata[]
         */
        public $HealthCheckResultsMetadata;

        /**
         * The health check results.
         * @var HealthCheckData[]
         */
        public $HealthCheckResults;

        /**
         * The errors that occurred while running the health checks.
         * @var HealthCheckError[]
         */
        public $HealthCheckErrors;
    }
}
