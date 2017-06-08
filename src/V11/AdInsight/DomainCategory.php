<?php
// Generated on 6/7/2017 5:55:31 AM

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a domain category with website coverage.
     * @link http://msdn.microsoft.com/en-us/library/mt772350(v=msads.110).aspx DomainCategory Data Object
     * 
     * @used-by GetDomainCategoriesResponse
     */
    final class DomainCategory
    {
        /**
         * Reserved for future use.
         * @var double
         */
        public $Bid;

        /**
         * The category name.
         * @var string
         */
        public $CategoryName;

        /**
         * A score from 0.
         * @var double
         */
        public $Coverage;
    }

}
