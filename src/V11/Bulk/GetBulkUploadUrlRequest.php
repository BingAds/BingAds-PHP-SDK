<?php
// Generated on 7/10/2017 3:08:21 PM

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Submits a request for a URL where a bulk upload file may be posted.
     * @link http://msdn.microsoft.com/en-us/library/dn249978(v=msads.110).aspx GetBulkUploadUrl Request Object
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
