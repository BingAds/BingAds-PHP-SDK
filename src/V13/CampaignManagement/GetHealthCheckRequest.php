<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethealthcheck?view=bingads-13 GetHealthCheck Request Object
     * 
     * @uses HealthCheckEntity
     * @used-by BingAdsCampaignManagementService::GetHealthCheck
     */
    final class GetHealthCheckRequest
    {
        /**
         * Reserved.
         * @var HealthCheckEntity[]
         */
        public $HealthCheckEntities;

        /**
         * Reserved.
         * @var string[]
         */
        public $HealthCheckTypes;
    }
}
