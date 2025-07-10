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
         * Reserved.
         * @var HealthCheckMetadata[]
         */
        public $HealthCheckResultsMetadata;

        /**
         * Reserved.
         * @var HealthCheckData[]
         */
        public $HealthCheckResults;

        /**
         * Reserved.
         * @var HealthCheckError[]
         */
        public $HealthCheckErrors;
    }
}
