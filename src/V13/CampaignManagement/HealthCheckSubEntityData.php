<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the health check sub entity data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/healthchecksubentitydata?view=bingads-13 HealthCheckSubEntityData Data Object
     * 
     * @used-by HealthCheckData
     */
    final class HealthCheckSubEntityData
    {
        /**
         * The number of health issues found for the subordinate entities.
         * @var integer
         */
        public $SubEntityHealthIssueCount;

        /**
         * The Microsoft Advertising identifiers of the subordinate entities with health issues.
         * @var integer[]
         */
        public $SubEntityIds;

        /**
         * The entity level of the subordinate entities.
         * @var string
         */
        public $SubEntityLevel;
    }

}
