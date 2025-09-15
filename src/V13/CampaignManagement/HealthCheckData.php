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
         * Reserved.
         * @var string
         */
        public $HealthCheckDataVersion;

        /**
         * Reserved.
         * @var HealthCheckEntity
         */
        public $HealthCheckEntity;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckJsonData;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckName;

        /**
         * Reserved.
         * @var HealthCheckSubEntityData
         */
        public $HealthCheckSubEntityResults;
    }

}
