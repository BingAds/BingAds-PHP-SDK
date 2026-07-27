<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check error data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckerror?view=bingads-13 HealthCheckError Data Object
     * 
     * @uses OperationError
     * @uses HealthCheckEntity
     * @used-by GetHealthCheckResponse
     */
    final class HealthCheckError
    {
        /**
         * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your download request was submitted.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * The health check entity.
         * @var HealthCheckEntity
         */
        public $HealthCheckEntity;

        /**
         * The health check name.
         * @var string
         */
        public $HealthCheckName;
    }

}
