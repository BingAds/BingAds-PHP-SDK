<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check entity data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckentity?view=bingads-13 HealthCheckEntity Data Object
     * 
     * @used-by HealthCheckData
     * @used-by HealthCheckError
     * @used-by GetHealthCheckRequest
     */
    final class HealthCheckEntity
    {
        /**
         * The Microsoft Advertising identifier of the entity to check.
         * @var integer
         */
        public $HealthCheckEntityId;

        /**
         * The entity level at which to run the health check.
         * @var string
         */
        public $HealthCheckEntityLevel;
    }

}
