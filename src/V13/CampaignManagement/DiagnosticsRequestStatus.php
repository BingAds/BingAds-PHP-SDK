<?php

namespace Microsoft\BingAds\V13\CampaignManagement;

{
    /**
     * Defines the DiagnosticsRequestStatus data object.
     * @link https:/learn.microsoft.com/advertising/campaign-management-service/diagnosticsrequeststatus?view=bingads-13 DiagnosticsRequestStatus Data Object
     * 
     * @uses OperationError
     * @used-by GetDiagnosticsResponse
     */
    final class DiagnosticsRequestStatus
    {
        /**
         * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your download request was submitted.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * The diagnostic request status.
         * @var string
         */
        public $Status;
    }

}
