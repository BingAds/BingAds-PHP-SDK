<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Reserved.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticsrequeststatus?view=bingads-13 DiagnosticsRequestStatus Data Object
     * 
     * @uses OperationError
     * @used-by GetDiagnosticsResponse
     */
    final class DiagnosticsRequestStatus
    {
        /**
         * Reserved.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * Reserved.
         * @var string
         */
        public $Status;
    }

}
