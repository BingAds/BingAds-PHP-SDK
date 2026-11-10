<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check data data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckdata?view=bingads-13 HealthCheckData Data Object
     * 
     * @uses HealthCheckEntity
     * @uses HealthCheckSubEntityData
     * @used-by GetHealthCheckResponse
     */
    final class HealthCheckData
    {
        /**
         * The version of the health check data format.
         * @var string
         */
        public $HealthCheckDataVersion;

        /**
         * The entity for which the health check was run.
         * @var HealthCheckEntity
         */
        public $HealthCheckEntity;

        /**
         * The health check result data in JSON format.
         * @var string
         */
        public $HealthCheckJsonData;

        /**
         * The name of the health check.
         * @var string
         */
        public $HealthCheckName;

        /**
         * The health check results for subordinate entities.
         * @var HealthCheckSubEntityData
         */
        public $HealthCheckSubEntityResults;
    }

}
