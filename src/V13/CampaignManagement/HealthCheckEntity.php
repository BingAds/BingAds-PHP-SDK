<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check entity data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckentity?view=bingads-13 HealthCheckEntity Data Object
     * 
     * @used-by HealthCheckData
     * @used-by HealthCheckError
     * @used-by GetDiagnosticsRequest
     * @used-by GetHealthCheckRequest
     */
    final class HealthCheckEntity
    {
        /**
         * Reserved.
         * @var integer
         */
        public $HealthCheckEntityId;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckEntityLevel;
    }

}
