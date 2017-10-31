<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines an object that contains a domain category with website coverage.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/domaincategory?view=bingads-11 DomainCategory Data Object
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
