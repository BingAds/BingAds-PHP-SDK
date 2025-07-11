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
         * Reserved.
         * @var integer
         */
        public $SubEntityHealthIssueCount;

        /**
         * Reserved.
         * @var integer[]
         */
        public $SubEntityIds;

        /**
         * Reserved.
         * @var string
         */
        public $SubEntityLevel;
    }

}
