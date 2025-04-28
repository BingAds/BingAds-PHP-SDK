<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/gethealthcheck?view=bingads-13 GetHealthCheck Response Object
     * 
     * @uses HealthCheckMetadata
     * @uses HealthCheckData
     * @uses HealthCheckError
     * @used-by BingAdsCampaignManagementService::GetHealthCheck
     */
    final class GetHealthCheckResponse
    {
        /**
         * Reserved.
         * @var HealthCheckMetadata[]
         */
        public $HealthCheckMetadatas;

        /**
         * Reserved.
         * @var HealthCheckData[]
         */
        public $HealthCheckDatas;

        /**
         * Reserved.
         * @var HealthCheckError[]
         */
        public $HealthCheckErrors;
    }
}
