<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the get diagnostics service operation.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdiagnostics?view=bingads-13 GetDiagnostics Response Object
     * 
     * @uses DiagnosticsRequestStatus
     * @uses EntityResult
     * @used-by BingAdsCampaignManagementService::GetDiagnostics
     */
    final class GetDiagnosticsResponse
    {
        /**
         * The status of the diagnostics request.
         * @var DiagnosticsRequestStatus
         */
        public $RequestStatus;

        /**
         * The entities to diagnose.
         * @var EntityResult[]
         */
        public $Entities;
    }
}
