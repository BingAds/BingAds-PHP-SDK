<?php

namespace Microsoft\BingAds\V13\AdInsight;

{
    /**
     * Defines an Ad Insight operation error object that contains the details that explain why the service operation failed.
     * @link https:/learn.microsoft.com/advertising/ad-insight-service/operationerror?view=bingads-13 OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error.
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
