<?php
// Generated on 4/4/2017 5:50:24 AM

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Gets the status and completion progress of a bulk upload request.
     * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.100).aspx GetBulkUploadStatus Response Object
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
         * The list of key and value strings for forward compatibility.
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
