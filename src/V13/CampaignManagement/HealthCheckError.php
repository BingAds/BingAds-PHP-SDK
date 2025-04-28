<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckerror?view=bingads-13 HealthCheckError Data Object
     * 
     * @uses OperationError
     * @uses HealthCheckEntity
     * @used-by GetHealthCheckResponse
     */
    final class HealthCheckError
    {
        /**
         * Reserved.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * Reserved.
         * @var HealthCheckEntity
         */
        public $HealthCheckEntity;

        /**
         * Reserved.
         * @var string
         */
        public $HealthCheckName;
    }

}
