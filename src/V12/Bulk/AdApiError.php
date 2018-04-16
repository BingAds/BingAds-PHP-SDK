<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/adapierror?view=bingads-12 AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

}
