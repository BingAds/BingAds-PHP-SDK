<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link https:/learn.microsoft.com/advertising/bulk-service/getbulkuploadstatus?view=bingads-13 GetBulkUploadStatus Response Object
     * 
     * @uses OperationError
     * @uses KeyValuePairOfstringstring
     * @used-by BingAdsBulkService::GetBulkUploadStatus
     */
    final class GetBulkUploadStatusResponse
    {
        /**
         * An array of OperationError objects corresponding to errors encountered during the system processing of the bulk file after your HTTP POST upload completed.
         * @var OperationError[]
         */
        public $Errors;

        /**
         * The list of key and value strings for forward compatibility to avoid otherwise breaking changes when new elements are added in the current API version.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The progress completion percentage for system processing of the uploaded bulk file.
         * @var integer
         */
        public $PercentComplete;

        /**
         * The status of the upload.
         * @var string
         */
        public $RequestStatus;

        /**
         * The URL of the file that contains the requested results, for example upload error information.
         * @var string
         */
        public $ResultFileUrl;
    }
}
