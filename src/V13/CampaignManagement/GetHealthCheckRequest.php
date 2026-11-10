<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Retrieves health check entities and types.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethealthcheck?view=bingads-13 GetHealthCheck Request Object
     * 
     * @uses HealthCheckEntity
     * @used-by BingAdsCampaignManagementService::GetHealthCheck
     */
    final class GetHealthCheckRequest
    {
        /**
         * The entities for which to run health checks.
         * @var HealthCheckEntity[]
         */
        public $HealthCheckEntities;

        /**
         * The types of health checks to run.
         * @var string[]
         */
        public $HealthCheckTypes;
    }
}
