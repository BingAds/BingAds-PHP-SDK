<?php

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/bb671973(v=msads.100).aspx OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     * @used-by EditorialApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

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
