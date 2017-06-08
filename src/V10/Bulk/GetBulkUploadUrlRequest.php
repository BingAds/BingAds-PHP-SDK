<?php
// Generated on 6/7/2017 5:54:04 AM

namespace Microsoft\BingAds\V10\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.100).aspx GetBulkUploadUrl Request Object
     * 
     * @uses ResponseMode
     * @used-by BingAdsBulkService::GetBulkUploadUrl
     */
    final class GetBulkUploadUrlRequest
    {
        /**
         * Specify whether to return errors and their corresponding data, or only the errors in the results file.
         * @var ResponseMode
         */
        public $ResponseMode;

        /**
         * The account identifier corresponding to the data that will be uploaded.
         * @var integer
         */
        public $AccountId;
    }
}
