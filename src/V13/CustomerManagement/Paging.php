<?php

namespace Microsoft\BingAds\V13\CustomerManagement;

{
    /**
     * Defines a paging object to request Customer Management objects in batches.
     * @link https://docs.microsoft.com/en-us/advertising/customer-management-service/paging?view=bingads-13 Paging Data Object
     */
    final class Paging
    {
        /**
         * The zero-based results page index.
         * @var integer
         */
        public $Index;

        /**
         * The page size and the number of results to return in the specified page.
         * @var integer
         */
        public $Size;
    }

}
