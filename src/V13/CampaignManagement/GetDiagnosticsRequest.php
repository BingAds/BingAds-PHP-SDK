<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdiagnostics?view=bingads-13 GetDiagnostics Request Object
     * 
     * @uses HealthCheckEntity
     * @used-by BingAdsCampaignManagementService::GetDiagnostics
     */
    final class GetDiagnosticsRequest
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
