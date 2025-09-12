<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/getdiagnostics?view=bingads-13 GetDiagnostics Response Object
     * 
     * @uses DiagnosticsRequestStatus
     * @uses EntityResult
     * @used-by BingAdsCampaignManagementService::GetDiagnostics
     */
    final class GetDiagnosticsResponse
    {
        /**
         * Reserved.
         * @var DiagnosticsRequestStatus
         */
        public $RequestStatus;

        /**
         * Reserved.
         * @var EntityResult[]
         */
        public $Entities;
    }
}
