<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check metadata data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthcheckmetadata?view=bingads-13 HealthCheckMetadata Data Object
     * 
     * @uses HealthCheckColumnMetadata
     * @used-by GetHealthCheckResponse
     */
    final class HealthCheckMetadata
    {
        /**
         * The category of the health check.
         * @var string
         */
        public $HealthCheckCategory;

        /**
         * The display name of the health check category.
         * @var string
         */
        public $HealthCheckCategoryDisplayName;

        /**
         * The metadata for columns in the health check result.
         * @var HealthCheckColumnMetadata[]
         */
        public $HealthCheckColumnsMetadata;

        /**
         * The health check description.
         * @var string
         */
        public $HealthCheckDescription;

        /**
         * The display name of the health check.
         * @var string
         */
        public $HealthCheckDisplayName;

        /**
         * The name that identifies the health check.
         * @var string
         */
        public $HealthCheckName;

        /**
         * The severity of the health check finding.
         * @var string
         */
        public $HealthCheckSeverity;

        /**
         * The subtype of the health check.
         * @var string
         */
        public $HealthCheckSubType;
    }

}
