<?php

namespace Microsoft\BingAds\V12\Bulk;

{
    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/adapifaultdetail?view=bingads-12 AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

}
