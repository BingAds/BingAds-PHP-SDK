<?php

namespace Microsoft\BingAds\V13\Bulk;

{
    /**
     * Defines a Bulk API fault detail object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link https:/learn.microsoft.com/advertising/bulk-service/apifaultdetail?view=bingads-13 ApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses OperationError
     */
    final class ApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of operation errors that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

}
