<?php
// Generated on 7/10/2017 3:08:11 PM

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * This feature is not supported in sandbox.
     * @link http://msdn.microsoft.com/en-us/library/dn632186(v=msads.110).aspx SearchClientLinks Request Object
     * 
     * @uses Predicate
     * @uses OrderBy
     * @uses Paging
     * @used-by BingAdsCustomerManagementService::SearchClientLinks
     */
    final class SearchClientLinksRequest
    {
        /**
         * Determines the request conditions.
         * @var Predicate[]
         */
        public $Predicates;

        /**
         * Determines the order of results.
         * @var OrderBy[]
         */
        public $Ordering;

        /**
         * Determines the index and size of results per page.
         * @var Paging
         */
        public $PageInfo;
    }
}
