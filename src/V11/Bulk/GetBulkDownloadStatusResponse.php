<?php
// Generated on 7/10/2017 3:08:21 PM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Gets the status of a bulk download request.
     * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.110).aspx GetBulkDownloadStatus Response Object
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
         * The list of key and value strings for forward compatibility.
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
         * The URL that contains the download data.
         * @var string
         */
        public $ResultFileUrl;
    }
}
