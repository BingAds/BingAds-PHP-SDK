<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Gets the status of a bulk download request.
     * @link https:/learn.microsoft.com/advertising/bulk-service/getbulkdownloadstatus?view=bingads-13 GetBulkDownloadStatus Response Object
     * 
     * @uses OperationError
     * @uses KeyValuePairOfstringstring
     * @used-by BingAdsBulkService::GetBulkDownloadStatus
     */
    final class GetBulkDownloadStatusResponse
    {
        /**
         * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your download request was submitted.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The progress completion percentage for system processing of the bulk download file.
         * @var integer
         */
        public $PercentComplete;

        /**
         * The status of the download.
         * @var string
         */
        public $RequestStatus;

        /**
         * The URL that contains the download data when the RequestStatus value is Completed.
         * @var string
         */
        public $ResultFileUrl;
    }
}
